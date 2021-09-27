<?php

namespace App\Controller;

use App\Entity\TypeOfVehicule;
use App\Form\TypeOfVehiculeType;
use App\Repository\TypeOfVehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/of/vehicule")
 */
class TypeOfVehiculeController extends AbstractController
{
    /**
     * @Route("/", name="type_of_vehicule_index", methods={"GET"})
     */
    public function index(TypeOfVehiculeRepository $typeOfVehiculeRepository): Response
    {
        return $this->render('type_of_vehicule/index.html.twig', [
            'type_of_vehicules' => $typeOfVehiculeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_of_vehicule_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeOfVehicule = new TypeOfVehicule();
        $form = $this->createForm(TypeOfVehiculeType::class, $typeOfVehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeOfVehicule);
            $entityManager->flush();

            return $this->redirectToRoute('type_of_vehicule_index');
        }

        return $this->render('type_of_vehicule/new.html.twig', [
            'type_of_vehicule' => $typeOfVehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_of_vehicule_show", methods={"GET"})
     */
    public function show(TypeOfVehicule $typeOfVehicule): Response
    {
        return $this->render('type_of_vehicule/show.html.twig', [
            'type_of_vehicule' => $typeOfVehicule,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_of_vehicule_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeOfVehicule $typeOfVehicule): Response
    {
        $form = $this->createForm(TypeOfVehiculeType::class, $typeOfVehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_of_vehicule_index');
        }

        return $this->render('type_of_vehicule/edit.html.twig', [
            'type_of_vehicule' => $typeOfVehicule,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_of_vehicule_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeOfVehicule $typeOfVehicule): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeOfVehicule->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeOfVehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_of_vehicule_index');
    }
}
