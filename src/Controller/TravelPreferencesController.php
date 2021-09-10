<?php

namespace App\Controller;

use App\Entity\TravelPreferences;
use App\Form\TravelPreferencesType;
use App\Repository\TravelPreferencesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/travel/preferences")
 */
class TravelPreferencesController extends AbstractController
{
    /**
     * @Route("/", name="travel_preferences_index", methods={"GET"})
     */
    public function index(TravelPreferencesRepository $travelPreferencesRepository): Response
    {
        return $this->render('travel_preferences/index.html.twig', [
            'travel_preferences' => $travelPreferencesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="travel_preferences_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $travelPreference = new TravelPreferences();
        $form = $this->createForm(TravelPreferencesType::class, $travelPreference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($travelPreference);
            $entityManager->flush();

            return $this->redirectToRoute('travel_preferences_index');
        }

        return $this->render('travel_preferences/new.html.twig', [
            'travel_preference' => $travelPreference,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="travel_preferences_show", methods={"GET"})
     */
    public function show(TravelPreferences $travelPreference): Response
    {
        return $this->render('travel_preferences/show.html.twig', [
            'travel_preference' => $travelPreference,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="travel_preferences_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TravelPreferences $travelPreference): Response
    {
        $form = $this->createForm(TravelPreferencesType::class, $travelPreference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('travel_preferences_index');
        }

        return $this->render('travel_preferences/edit.html.twig', [
            'travel_preference' => $travelPreference,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="travel_preferences_delete", methods={"POST"})
     */
    public function delete(Request $request, TravelPreferences $travelPreference): Response
    {
        if ($this->isCsrfTokenValid('delete'.$travelPreference->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($travelPreference);
            $entityManager->flush();
        }

        return $this->redirectToRoute('travel_preferences_index');
    }
}
