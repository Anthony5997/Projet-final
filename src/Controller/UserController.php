<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\TravelPreferencesType;
use App\Form\VehiculeType;
use App\Form\UserResetType;
use App\Repository\BookingRepository;
use App\Repository\ReviewRepository;
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

use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;

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
        if($user == $this->getUser()){
            return $this->redirectToRoute('user_edit', [
                'id'=>$this->getUser()->getId(),
            ]);  

        }else{
            if($userRepository->findAllUserInfo($user->getId())){
                $user = $userRepository->findAllUserInfo($user->getId());
            }

            return $this->render('user/show.html.twig', [
                'user' => $user,
            ]);
        }
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
    public function edit(Request $request, User $user, UserRepository $userRepository ,ReviewRepository $reviewRepository, TravelPreferencesController $travelPreferencesController, VehiculeController $vehiculeController, VehiculeRepository $vehiculeRepository, TravelPreferencesRepository $travelPreferencesRepository, TripRepository $tripRepository, BookingRepository $bookingRepository, SluggerInterface $slugger, UserPasswordEncoderInterface $passwordEncoder): Response
    {

    //    $allReview = $reviewRepository->getReviewByUser($user);
          $globalRating = $reviewRepository->getAverageByUser($user);
    //    dd($globalRating[0]);

       $tripRepository->findAll();
    //    $userRepository->findAll();
        $userEmail = $user->getEmail();
        $travelPreferences = $travelPreferencesRepository->findOneBy(['id'=> $user->getTravelPreferences()]);
        $vehicule = $vehiculeRepository->findOneBy(['id'=> $user->getVehicule()]);
        $allTrip = $tripRepository->getAllTripByUser($user);
        $allBookings = $bookingRepository->findBy(['user' => $user]);

        // dd($allBookings);
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

            $profile_picture = $form->get('profile_picture')->getData();
        
            if($profile_picture !== null){
                $this->deletePicture($this->getParameter('profile_picture_directory').'/'. $this->getUser()->getProfile_Picture());
                $user->setProfile_Picture($this->uploadFiles($profile_picture, 'profile_picture_directory', $slugger));
                $this->addFlash('success', 'La photo a été mis à jour');
            }

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Vos informations ont été mise à jour');

            return $this->redirectToRoute('user_edit', [
                'id'=>$user->getId()
            ]);
        }

        if ($form2->isSubmitted() && $form2->isValid()) {
            
            $entityManager = $travelPreferencesController->getDoctrine()->getManager();
            $entityManager->persist($travelPreferences);
            $entityManager->flush();
            $this->addFlash('success', 'Vos préférences ont été mis à jour');

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
            $this->addFlash('success', 'Votre véhicule a été mis à jour');


            return $this->redirectToRoute('user_edit', [
                'id'=>$user->getId()
            ]);
        }

        if ($formReset->isSubmitted() && $formReset->isValid()) {
    
            $oldPassword = $formReset->get('password')->getData();
            $newPassword = $formReset->get('newPassword')->getData();
            $email = $user->getEmail();
            $this->verifications($user, $userEmail, $email, $passwordEncoder,$oldPassword, $newPassword); 
            }
            $tripRepository->findAll();
        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'userPref' => $form2->createView(),
            'vehicule' => $formVehicule->createView(),
            'formReset' => $formReset->createView(),
            'trips' => $allTrip,
            'globalRating' => $globalRating,
            'bookings' =>$allBookings,
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository, TravelPreferencesRepository $travelPreferencesRepository, VehiculeRepository $vehiculeRepository): Response
    {
        $userVehicule = $vehiculeRepository->findOneBy(['id' => $user->getVehicule()]);
        $userPreferences = $travelPreferencesRepository->findOneBy(['id' => $user->getTravelPreferences()]);
        // dd($user, $userVehicule, $userPreferences);
        
        $user->setFirstName("Compte supprimé");
        $user->setLastName(null);
        $user->setPhone(null);
        $user->setTravelPreferences(null);
        $userVehicule->setTypeOfVehicule(null);
        $userVehicule->setVehiculePicture("default-vehicule.jpg");
        $userVehicule->setCountryOfRegistration(null);
        $userVehicule->setNumberplate(null);
        $userVehicule->setBrand(null);
        $userVehicule->setColor(null);
        $userVehicule->setYear(null);
        $userVehicule->setId(null);
        $user->setVehicule(null);
        $user->setProfile_Picture("default_profile_picture.jpg");
        $user->setBio(null);
        $user->setEmail(null);
        $user->setTripsMade(0);
        $user->setGlobalRating(null);
        $user->setUserExperience(null);
        $user->setDateOfBirth(null);
        $userPreferences->setId(null);
        $entityManager = $this->getDoctrine()->getManager();
         $entityManager->remove($userVehicule);
         $entityManager->remove($userPreferences);
        $entityManager->flush();
        return $this->redirectToRoute('logout');
        

        // if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {

        //     $this->deletePicture($this->getParameter('profile_picture_directory').'/'. $this->getUser()->getProfile_Picture());
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->remove($user);
        //     $entityManager->flush();
        // }

    }
}
