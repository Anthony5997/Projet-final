<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\TravelPreferencesType;
use App\Form\VehiculeType;
use App\Repository\TravelPreferencesRepository;
use App\Repository\UserRepository;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use \App\Traits\CustomFiles;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    use CustomFiles;
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, TravelPreferencesController $travelPreferencesController, VehiculeType $vehiculeType, VehiculeController $vehiculeController, VehiculeRepository $vehiculeRepository, TravelPreferencesRepository $travelPreferencesRepository, SluggerInterface $slugger): Response
    {
        $travelPreferences = $travelPreferencesRepository->findOneBy(['id'=> $user->getTravelPreferences()]);
        $vehicule = $vehiculeRepository->findOneBy(['id'=> $user->getVehicule()]);

        $form = $this->createForm(UserType::class, $user);
        $form2 = $this->createForm(TravelPreferencesType::class, $travelPreferences);
        $formVehicule = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        $form2->handleRequest($request);
        $formVehicule->handleRequest($request);

       // dd($userRepository->findUserTravelPreferences($user->getId()));
        if ($form->isSubmitted() && $form->isValid()) {

            $id_card_file = $form->get('id_card_file')->getData();
            $profile_picture = $form->get('profile_picture')->getData();
        
            if($id_card_file !== null){
                $user->setId_Card_File($this->uploadFiles($id_card_file, 'idCard_directory', $slugger));
                $user->setIdCard(true);
                $this->addFlash('success', 'The ID Card was updated');
            }
            if($profile_picture !== null){
                $user->setProfile_Picture($this->uploadFiles($profile_picture, 'profilePicture_directory', $slugger));
                $this->addFlash('success', 'The photo was updated');
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('home');
        }

        if ($form2->isSubmitted() && $form2->isValid()) {
            
            $entityManager = $travelPreferencesController->getDoctrine()->getManager();
            $entityManager->persist($travelPreferences);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        if ($formVehicule->isSubmitted() && $formVehicule->isValid()) {

            $entityManager = $vehiculeController->getDoctrine()->getManager();
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'userPref' => $form2->createView(),
            'vehicule' => $formVehicule->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}
