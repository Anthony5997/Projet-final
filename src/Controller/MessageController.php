<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Trip;
use App\Entity\User;
use App\Form\MessageType;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/message")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/", name="message_index", methods={"GET"})
     */
    public function index(MessageRepository $messageRepository): Response
    {


        return $this->render('message/index.html.twig', [
            'messages' => $messageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/new", name="message_new", methods={"GET","POST"})
     */
    public function new(Request $request, User $userContacted): Response
    {
        $user = $this->getUser();
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $date = new \DateTime();
            $message->setSendAt($date);
            $message->setReceiver($userContacted);
            $message->setSender($user);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('message_discussion_details', ['id'=> $user->getId()]);
        }
        return $this->render('message/discussion_detail.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
            'id' => $userContacted->getId(),
            'contact' => $userContacted,
            'currentUser' => $user,
        ]);
    }

    /**
     * @Route("/discussion/{id}", name="message_discussion", methods={"GET", "POST"})
     */
    public function show(User $user, MessageRepository $messageRepository, UserRepository $userRepository): Response
    {
        $getAllReceiver = $messageRepository->getAllReceiver($user);
        return $this->render('message/discussions.html.twig', [
            'messageReceive' => $getAllReceiver,
        ]);
    }


    /**
     * @Route("/discussion/{id}/details", name="message_discussion_details", methods={"GET", "POST"})
     */
    public function detail(Request $request, User $user, MessageRepository $messageRepository, UserRepository $userRepository): Response
    {

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        $getAllDiscussion = $messageRepository->findBy(['sender' => [$user, $this->getUser()], 'receiver' => [$this->getUser(), 'receiver' => $user]],  array('send_at' => 'ASC'));

        if ($form->isSubmitted() && $form->isValid()) {


            $date = new \DateTime();
            $date->format('Y-m-d H:i:s');
            $message->setSendAt($date);
            $message->setReceiver($user);
            $message->setSender($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('message_discussion_details', ['id'=> $user->getId()]);
        }
        return $this->render('message/discussion_detail.html.twig', [
            'messageReceive' => $getAllDiscussion,
            'form' => $form->createView(),
            'id' => $user->getId(),
            'contact' => $user,
            'currentUser' => $this->getUser(),
            
        ]);        
        
    }

    /**
     * @Route("/{id}/edit", name="message_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Message $message): Response
    {
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('message_index');
        }

        return $this->render('message/edit.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="message_delete", methods={"POST"})
     */
    public function delete(Request $request, Message $message): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('message_index');
    }
}
