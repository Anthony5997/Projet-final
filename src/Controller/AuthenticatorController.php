<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\Authenticator;
use App\Traits\CustomResetPassword;
use App\Traits\tokenGenerator;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class AuthenticatorController extends AbstractController
{
    use tokenGenerator, CustomResetPassword;

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
       throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    /**
     * @Route("/forget-password", name="forget_password", priority=1)
     */
    public function resetPassword(Request $request, UserRepository $userRepository, MailerInterface $mailerInterface): Response
    {

        if($this->getUser()){
            return $this->redirectToRoute('home');
        }
        if ($request->get('email')) {
            $donnees = $request->get('email');

            $user = $userRepository->findOneBy(['email' => $donnees]);

            if ($user === null) {
                $this->addFlash('error', 'Cette adresse e-mail est inconnue');
                
                return $this->redirectToRoute('login');
            }

            $token =  substr($this->generateToken($user),0, 5);
            $date = new DateTime();
            $date->format('dmY');
            $formatedToken = $token.$date->format('dmY');

            try{
                $user->setResetToken($formatedToken);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            } catch (\Exception $e) {
                $this->addFlash('warning', $e->getMessage());
                return $this->redirectToRoute('login');
            }

            $url = $this->generateUrl('reset_forget_password', array('id' => $user->getId(), 'token' => $formatedToken ), UrlGeneratorInterface::ABSOLUTE_URL);

            $this->sendEmail($mailerInterface, $user, $url);
            $this->addFlash('message', 'E-mail de réinitialisation du mot de passe envoyé !');

            return $this->redirectToRoute('login');
        }

        return $this->render('security/forget-password.html.twig');
    }

    /**
     * @Route("/{id}/reset-forget-password/{token}", name="reset_forget_password", methods={"GET","POST"})
     */
    public function forgetPasswordReset(Request $request,UserRepository $userRepository, User $user, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, Authenticator $authenticator): Response
    {
        $user = $userRepository->findOneBy(['id' => $request->get('id')]);
        $token = $request->get('token');
        $tokenDate = substr($request->get('token'), 5, 14);
        $currentDate = new DateTime();
        if($tokenDate != $currentDate->format('dmY')){
           
            $this->addFlash('error', 'Votre lien à expiré, veuillez recommencer l\'opération');
            return $this->redirectToRoute('login');
            
        }elseif($user->getResetToken() != $token){

            $this->addFlash('error', 'Une erreur est survenue, veuillez recommencer l\'opération');
            return $this->redirectToRoute('login');

        }else{
            if ($request->get('password1') == $request->get('password2') && $request->get('password1') != '') {

                $newPassword = $request->get('password1');
                 $this->forgetPassword($passwordEncoder, $newPassword, $user); 
                 $passwordValide = $passwordEncoder->isPasswordValid($user, $request->get('password1') );
                    if($passwordValide){

                    $guardHandler->authenticateUserAndHandleSuccess(
                        $user,
                        $request,
                        $authenticator,
                        'main'
                        );
                    }

                 $this->addFlash('success', 'Votre mot de passe à bien été réinitialisé');
                 
                return $this->redirectToRoute('login');
            }else{

                return $this->render('security/reset-password.html.twig', [
                    'user' => $user,
                    'id' => $user->getId(),
                    'token' => $token
                ]);
            }
            
        }
    }



    public function sendEmail(MailerInterface $mailer, User $user, $url)
    {
        $email = (new Email())
            ->from('adminBot@test.com')
            ->to($user->getEmail())
            ->subject('Récupération de mot de passe')
            ->text('Récupérez votre mot de passe')
            ->html('Bonjour,<br><br>Une demande de réinitialisation de mot de passe a été effectuée pour le site Vamos. Veuillez cliquer sur le lien suivant : <a href='.$url.'>'. $url .'</a>', 'text/html');

        return $mailer->send($email);
    }
}
