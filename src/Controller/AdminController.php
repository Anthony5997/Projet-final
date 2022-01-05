<?php

namespace App\Controller;

use App\Repository\ReviewRepository;
use App\Repository\TripRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(TripRepository $tripRepository, UserRepository $userRepository, ReviewRepository $reviewRepository): Response
    {

        $last5Reviews = $reviewRepository->findBy([], ['created_at' => 'DESC'], 5);
        $allTrips = $tripRepository->findBy([], ['date_of_trip' => 'DESC']);
        $last6Trips = $tripRepository->findBy([], ['date_of_trip' => 'DESC'], 6);
        $tripIncoming = $tripRepository->findBy(['tripStarted' => 0], ['date_of_trip' => 'DESC']);
        $tripCompleted = $tripRepository->findBy(['trip_completed' => 1], ['date_of_trip' => 'DESC']);

        $last20User = $userRepository->findBy([], ['created_at' => 'DESC'], 20);

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'allTrip' => count($allTrips),
            'allUser' => $last20User,
            'tripIncoming' => count($tripIncoming),
            'tripCompleted' => count($tripCompleted),
            'lastReviews' => $last5Reviews,
            'lastTrips' => $last6Trips,
        ]);
    }
}
