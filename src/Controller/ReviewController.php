<?php

namespace App\Controller;

use App\Entity\Review;
use App\Entity\Trip;
use App\Entity\User;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/review")
 */
class ReviewController extends AbstractController
{
    /**
     * @Route("/", name="review_index", methods={"GET"})
     */
    public function index(ReviewRepository $reviewRepository): Response
    {
        return $this->render('review/index.html.twig', [
            'reviews' => $reviewRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/new", name="review_new", methods={"GET","POST"})
     */
    public function new(Request $request, Trip $trip, UserRepository $userRepository, ReviewRepository $reviewRepository): Response
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        $userRated = $userRepository->findOneBy(['id' => $trip->getDriver()->getId()]);
        $author = $this->getUser();
        $reviewExist = $reviewRepository->checkReviewExist($trip, $author, $userRated);

        //dd($reviewExist);
        if($reviewExist === null){
            if ($form->isSubmitted() && $form->isValid()) {

                $date = new \DateTime();
                $request->get('rating');
                $review->setRating($request->get('rating'));
                $review->setTrip($trip);
                $review->setUserRated($userRated);
                $review->setAuthor($author);
                $review->setCreatedAt($date);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($review);
                $entityManager->flush();
                $newUserRating = $reviewRepository->getAverageByUser($userRated);
                $userRated->setGlobalRating($newUserRating[0]['rate_avg']);
               // dd($userRated);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($userRated);
                $entityManager->flush();



                $this->addFlash('success', 'Merci pour votre avis !');
                return $this->redirectToRoute('user_edit', ['id' => $author->getId()]);

            }else{

                return $this->render('review/new.html.twig', [
                    'userRated' => $userRated,
                    'trip' => $trip,
                    'currentUser' => $this->getUser(),
                    'review' => $review,
                    'form' => $form->createView(),
                    'id' => $trip->getId(),
                    'reviewExist' => $reviewExist

                ]);
            }

        }else{
    
            return $this->render('review/new.html.twig', [
                'userRated' => $userRated,
                'trip' => $trip,
                'currentUser' => $this->getUser(),
                'review' => $review,
                'form' => $form->createView(),
                'id' => $trip->getId(),
                'reviewExist' => $reviewExist
            ]);

        }
    }

    /**
     * @Route("/{id}", name="review_show", methods={"GET"})
     */
    public function show(Review $review): Response
    {
        return $this->render('review/show.html.twig', [
            'review' => $review,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="review_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Review $review): Response
    {
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('review_index');
        }

        return $this->render('review/edit.html.twig', [
            'review' => $review,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="review_delete", methods={"POST"})
     */
    public function delete(Request $request, Review $review): Response
    {
        if ($this->isCsrfTokenValid('delete'.$review->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($review);
            $entityManager->flush();
        }

        return $this->redirectToRoute('review_index');
    }
}
