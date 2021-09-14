<?php

namespace App\Controller;

use App\Entity\Trip;
use App\Form\TripType;
use App\Repository\TripRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/trip")
 */
class TripController extends AbstractController
{
    /**
     * @Route("/", name="trip_index", methods={"GET"})
     */
    public function index(TripRepository $tripRepository): Response
    {
        return $this->render('trip/index.html.twig', [
            'trips' => $tripRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="trip_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        //dd('API INFO : ', $this->api_request());
        $trip = new Trip();
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);
       // dd($form->isValid());
       
       
       if ($form->isSubmitted()) {
           
           $test = explode(",", $request->get('trip')['departure']);
            dd($test[0]);
           $trip->setArrival($request->get('trip')['departure']);
           $trip->setDeparture($request->get('trip')['arrival']);
           $trip->setTripCompleted(false);
           $trip->setTripFull(false);
           $trip->setDriver($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trip);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('trip/new.html.twig', [
            'trip' => $trip,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="trip_show", methods={"GET"})
     */
    public function show(Trip $trip): Response
    {
        return $this->render('trip/show.html.twig', [
            'trip' => $trip,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="trip_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Trip $trip): Response
    {
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('trip_index');
        }

        return $this->render('trip/edit.html.twig', [
            'trip' => $trip,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="trip_delete", methods={"POST"})
     */
    public function delete(Request $request, Trip $trip): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trip->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trip);
            $entityManager->flush();
        }

        return $this->redirectToRoute('trip_index');
    }


      /**
     * @Route("/test/{ville}", name="test")
     */
    public function test(Request $request)
    {       
            $city = $request->get('ville');
            $token = 'AIzaSyDNwlL_Fbumi8lvNKIctvzrIKxiSZITz7I';
    
                $httpClient = HttpClient::create([], 6, 50);
                $response = $httpClient->request('GET', 'https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.$city.'&types=geocode&language=fr&key='. $token, 
                    ['headers' => [
                        'Authorization' => 'Bearer ' . $token,
                        'Content-type' =>'application/json',
                        ],
                    ]);

                $statusCode = $response->getStatusCode();
                $contentType = $response->getHeaders()['content-type'][0];
                $content = $response->getContent();

                return new JsonResponse(
                    $response->toArray(),
                    Response::HTTP_OK
               );
    }
}
