<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Trip;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/booking")
 */
class BookingController extends AbstractController
{
    /**
     * @Route("/", name="booking_index", methods={"GET"})
     */
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('booking/index.html.twig', [
            'bookings' => $bookingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/new", name="booking_new", methods={"GET"})
     */
    public function new(Trip $trip, BookingRepository $bookingRepository)
    {
        $user = $this->getUser();
        $result = $bookingRepository->bookingExist($user->getId(), $trip->getId());
        if($result === null){
            if($trip->getPassengers() === 1){

                $date = new \DateTime();
                $booking = new Booking();
                $booking->setTrip($trip);
                $booking->setUser($user);
                $trip->setTripFull(true);
                $booking->setCreatedAt($date);
                $trip->setPassengers($trip->getPassengers() - 1);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($booking, $trip);
                $entityManager->flush();
                $this->addFlash('success', 'La réservation à été prise en compte');
    
                return $this->redirectToRoute('trip_details', [
                     'id' => $trip->getId(),
                    ]);
            }elseif($trip->getPassengers() !== 0) {


                $date = new \DateTime();
                $booking = new Booking();
                $booking->setTrip($trip);
                $booking->setUser($user);
                $trip->setTripFull(true);
                $booking->setCreatedAt($date);
                $trip->setPassengers($trip->getPassengers() - 1);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($booking, $trip);
                $entityManager->flush();
                $this->addFlash('success', 'La réservation à été prise en compte');
    
                return $this->redirectToRoute('trip_details', [
                     'id' => $trip->getId(),
                ]);
            
            
            }else{

                $this->addFlash('error', 'Désolé ce trajet est déjà complet');
                return $this->redirectToRoute('trip_details', [ 'id' => $trip->getId()]);
            }

        }else{
            $trip->setPassengers($trip->getPassengers() + 1);
            $trip->setTripFull(false);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trip);
            $entityManager->flush();
            $bookingRepository->bookingRemove($user->getId(), $trip->getId());
            $this->addFlash('success', 'Réservation supprimé');
            return $this->redirectToRoute('trip_details', [ 'id' => $trip->getId()]);

        }

    }

    /**
     * @Route("/{id}", name="booking_delete", methods={"POST"})
     */
    public function delete(Request $request, Booking $booking): Response
    {
        if ($this->isCsrfTokenValid('delete'.$booking->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($booking);
            $entityManager->flush();
        }

        return $this->redirectToRoute('booking_index');
    }
}
