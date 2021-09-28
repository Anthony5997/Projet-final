<?php

namespace App\Controller;

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
    public function index(TripRepository $tripRepository, UserRepository $userRepository): Response
    {

        $last20Trip = $tripRepository->findBy([], ['date_of_trip' => 'DESC'], 20);
        $last20User = $userRepository->findBy([], ['created_at' => 'DESC'], 20);

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'allTrip' => $last20Trip,
            'allUser' => $last20User,
        ]);
    }
}
