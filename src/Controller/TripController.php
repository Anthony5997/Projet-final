<?php

namespace App\Controller;

use App\Entity\Trip;
use App\Form\SearchTravelType;
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

        $trip = new Trip();
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);
       // dd($form->isValid());
       
       
       if ($form->isSubmitted()) {
            
            $formatDeparture = explode(",", $request->get('trip')['departure']);
            $formatArrival = explode(",", $request->get('trip')['arrival']);
            $trip->setArrival($formatArrival[0]);
            $trip->setDeparture($formatDeparture[0]);
            $trip->setTripCompleted(false);
            $trip->setTripFull(false);
            $trip->setDriver($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trip);
            $entityManager->flush();
            $this->addFlash('success', 'Votre trajet a été publié');
            return $this->redirectToRoute('trip_show', ['id'=> $trip->getId()]);
        }

        return $this->render('trip/new.html.twig', [
            'trip' => $trip,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="trip_show", methods={"GET", "POST"})
     */
    public function show(Trip $trip): Response
    {
        return $this->render('trip/show.html.twig', [
            'trip' => $trip,
        ]);
    }


    /**
     * @Route("/treatment/{id}", name="trip_treatment", methods={"GET", "POST"}, priority=3)
     */
    public function treatment(Request $request, Trip $trip)
    {

        if($trip->getArrival() === null && $trip->getDeparture() === null){

            if ($request->get('duration') && $request->get('distance') ) {
    
                $trip->setDuration($request->get('duration'));
                $trip->setDistance($request->get('distance'));
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($trip);
                $entityManager->flush();
              //  dd("TRIP ", $trip);
    
              return new JsonResponse(
                [],
                Response::HTTP_OK
            );
            }else{
                return new JsonResponse(
                    ['message'=>'Une erreur est survenu lors de la création du trajet'],
                    Response::HTTP_OK
                );  
            }

        }else{

            return new JsonResponse(
                ['message'=>'Distance et temps de trajet déjà ajouté'],
                Response::HTTP_OK
            ); 
        }
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
     * @Route("/search", name="trip_search", methods={"GET"}, priority=4)
     */
    public function search(Request $request, TripRepository $tripRepository): Response
    {
        $arrivalSearch = $request->get('arrivalSearch');
        $departureSearch = $request->get('departureSearch');
        $dateSearch = $request->get('dateSearch');

        if ( $arrivalSearch && $departureSearch && $dateSearch ) {

            $result = $tripRepository->findOnTripWithDate($arrivalSearch, $departureSearch, $dateSearch);

            dd("result ", $result);
        
            return $this->redirectToRoute('trip_index');
        }

        return $this->render('trip/search.html.twig', [

        ]);
    }


    /**
     * @Route("/delete/{id}", name="trip_delete", methods={"POST"})
     */
    public function delete(Request $request, Trip $trip): Response
    {
    
        if ($this->isCsrfTokenValid('delete'.$trip->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trip);
            $entityManager->flush();
            $this->addFlash('success', 'Votre trajet a été supprimé');
        }

            return $this->redirectToRoute('trip_new');
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

    /**
     * @Route("/{id}/route_request", name="routeRequest", priority=2, methods={"GET"})
     */
    public function routeRequest(Trip $trip): Response
    {       

        $arrival = $trip->getArrival();
        $departure = $trip->getDeparture();
        $token = 'AIzaSyDNwlL_Fbumi8lvNKIctvzrIKxiSZITz7I';

            $httpClient = HttpClient::create([], 6, 50);
            $response = $httpClient->request('GET', 'https://maps.googleapis.com/maps/api/directions/json?origin='.$departure.'&destination='.$arrival.'&language=fr&key='. $token, 
                ['headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Content-type' =>'application/json',
                    ],
                ]);

            $statusCode = $response->getStatusCode();
            $contentType = $response->getHeaders()['content-type'][0];
            $content = $response->getContent();
            //    dd("COUCOU ", $response->toArray());

            return new JsonResponse(
                $response->toArray(),
                Response::HTTP_OK
            );
    }
}
