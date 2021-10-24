<?php

namespace App\Controller;

use App\Repository\TripRepository;
use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(TripRepository $tripRepository): Response
    {
        $tripList = $tripRepository->findLastTrip();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'tripList' => $tripList,
        ]);
    }
}
