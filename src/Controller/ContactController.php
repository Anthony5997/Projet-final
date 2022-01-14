<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    public function sendEmail(HttpFoundationRequest $request, MailerInterface $mailer): Response
    {
        $visitor_name = "";
        $visitor_email = "";
        $email_title = "";
        $visitor_message = "";
        $visitor_phone = "";
        $recipient = $this->getParameter('emailVamos'); 

        if($request->get('name') !== "") {
            $visitor_name = filter_var($request->get('name'), FILTER_SANITIZE_STRING);
        }

        if($request->get('email')!== "") {
            $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $request->get('email'));
            $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        }else{
            $this->addFlash('error', "Votre email n'est pas validé");
            return $this->redirectToRoute('contact');
        }

        if($request->get('sujet')!== "") {
            $email_title = filter_var($request->get('sujet'), FILTER_SANITIZE_STRING);
        }


        if($request->get('phone')!== "") {
        $visitor_phone = filter_var($request->get('phone'), FILTER_SANITIZE_STRING);
        }

        if($request->get('message')!== "") {
            $visitor_message = htmlspecialchars($request->get('message'). " , ". "Client : ". $visitor_name . " , " ."Téléphone client :" . $visitor_phone);
        }else{
            $this->addFlash('error', "Votre message n'est pas validé");
            return $this->redirectToRoute('contact');
        }

        $message = (new Email())
                ->from($visitor_email)
                ->to($recipient)
                ->subject($email_title)
                ->text('Sender : '.$visitor_email.\PHP_EOL.$visitor_message,'text/plain');
            $mailer->send($message);

        $this->addFlash('success', "Votre email a été envoyé");
        return $this->redirectToRoute('home');
    }
}