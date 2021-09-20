<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\TravelPreferencesType;
use App\Form\VehiculeType;
use App\Form\UserResetType;
use App\Repository\TravelPreferencesRepository;
use App\Repository\TripRepository;
use App\Repository\UserRepository;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use \App\Traits\CustomFiles;
use \App\Traits\CustomResetPassword;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    use CustomFiles, CustomResetPassword;
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
    public function show(User $user, UserRepository $userRepository): Response
    {
        dd($userRepository->findAllUserInfo($user->getId()));
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

      /**
     * @Route("/profile/{id}", name="user_view_profile", methods={"GET"})
     */
    public function viewProfile(User $user): Response
    {
        return $this->render('user/user-view-profile.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user, TravelPreferencesController $travelPreferencesController, VehiculeController $vehiculeController, VehiculeRepository $vehiculeRepository, TravelPreferencesRepository $travelPreferencesRepository, TripRepository $tripRepository, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $userEmail = $user->getEmail();
        $travelPreferences = $travelPreferencesRepository->findOneBy(['id'=> $user->getTravelPreferences()]);
        $vehicule = $vehiculeRepository->findOneBy(['id'=> $user->getVehicule()]);
        $allTrip = $tripRepository->getAllTripByUser($user);

        $form = $this->createForm(UserType::class, $user);
        $form2 = $this->createForm(TravelPreferencesType::class, $travelPreferences);
        $formReset = $this->createForm(UserResetType::class, $user);
        $formVehicule = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        $form2->handleRequest($request);
        $formReset->handleRequest($request);
        $formVehicule->handleRequest($request);

       // dd($userRepository->findUserTravelPreferences($user->getId()));
        if ($form->isSubmitted() && $form->isValid()) {

            $id_card_file = $form->get('id_card_file')->getData();
            $profile_picture = $form->get('profile_picture')->getData();
        
            if($id_card_file !== null){
                $user->setId_Card_File($this->uploadFiles($id_card_file, 'id_card_directory', $slugger));
                $user->setIdCard(true);
                $this->addFlash('success', 'La carte d\'identité a été ajouté');
            }
            if($profile_picture !== null){
                $user->setProfile_Picture($this->uploadFiles($profile_picture, 'profile_picture_directory', $slugger));
                $this->addFlash('success', 'La photo a été mis à jour');
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', [
                'id'=>$user->getId()
            ]);
        }

        if ($form2->isSubmitted() && $form2->isValid()) {
            
            $entityManager = $travelPreferencesController->getDoctrine()->getManager();
            $entityManager->persist($travelPreferences);
            $entityManager->flush();

            return $this->redirectToRoute('user_edit', [
                'id'=>$user->getId()
            ]);        }

        if ($formVehicule->isSubmitted() && $formVehicule->isValid()) {

            $vehicule_picture = $formVehicule->get('vehicule_picture')->getData();

            if($vehicule_picture !== null){
                $vehicule->setVehiculePicture($this->uploadFiles($vehicule_picture, 'vehicule_picture_directory', $slugger));
                $this->addFlash('success', 'La photo a été mis à jour');
            }

            $entityManager = $vehiculeController->getDoctrine()->getManager();
            $entityManager->persist($vehicule);
            $entityManager->flush();

            return $this->redirectToRoute('user_edit', [
                'id'=>$user->getId()
            ]);
        }

        if ($formReset->isSubmitted() && $formReset->isValid()) {
    
            $oldPassword = $formReset->get('password')->getData();
            $newPassword = $formReset->get('newPassword')->getData();
            $email = $formReset->get('email')->getData();
            $this->verifications($user, $userEmail, $email, $passwordEncoder,$oldPassword, $newPassword);  
    
            }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'userPref' => $form2->createView(),
            'vehicule' => $formVehicule->createView(),
            'formReset' => $formReset->createView(),
            'trips' => $allTrip,
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
