<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
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

class AuthenticatorController extends AbstractController
{
    use tokenGenerator, CustomResetPassword;
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
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
        // Si le formulaire est valide
        if ($request->get('email')) {
            // On récupère les données
            $donnees = $request->get('email');

            // On cherche un utilisateur ayant cet e-mail
            $user = $userRepository->findOneBy(['email' => $donnees]);

            // Si l'utilisateur n'existe pas
            if ($user === null) {
                // On envoie une alerte disant que l'adresse e-mail est inconnue
                $this->addFlash('error', 'Cette adresse e-mail est inconnue');
                
                // On retourne sur la page de connexion
                return $this->redirectToRoute('login');
            }

            // On génère un token
            $token =  substr($this->generateToken($user),0, 5);
            $date = new DateTime();
            $date->format('dmY');
            $formatedToken = $token.$date->format('dmY');

            // On essaie d'écrire le token en base de données
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
            // On génère l'e-mail

            $this->sendEmail($mailerInterface, $user, $formatedToken, $url);

            // On crée le message flash de confirmation
            $this->addFlash('message', 'E-mail de réinitialisation du mot de passe envoyé !');

            // On redirige vers la page de login
            return $this->redirectToRoute('login');
        }

        // On envoie le formulaire à la vue
        return $this->render('security/forget-password.html.twig');
    }

    /**
     * @Route("/{id}/reset-forget-password/{token}", name="reset_forget_password", methods={"GET","POST"})
     */
    public function forgetPasswordReset(Request $request,UserRepository $userRepository, User $user, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $userRepository->findOneBy(['id' => $request->get('id')]);
        $token = $request->get('token');
        $tokenDate = substr($request->get('token'), 5, 14);
        $currentDate = new DateTime();
        if($tokenDate =! $currentDate->format('dmY')){
           
            $this->addFlash('error', 'Votre lien à expiré, veuillez recommencer l\'opération');
            return $this->redirectToRoute('login');

        }else{
            
            if ($request->get('password1') == $request->get('password2')) {
                
           
                $newPassword = $request->get('password1');
              //  $this->forgetPassword($passwordEncoder, $newPassword, $user); 
            }
            
            return $this->render('security/reset-password.html.twig', [
                'user' => $user,
                'id' => $user->getId(),
                'token' => $token
            ]);
        }
    }



    public function sendEmail(MailerInterface $mailer, User $user, $token, $url)
    {
        $email = (new Email())
            ->from('adminBot@test.com')
            ->to($user->getEmail())
            ->subject('Récupération de mot de passe')
            ->text('Sending emails is fun again!')
            ->html('Bonjour,<br><br>Une demande de réinitialisation de mot de passe a été effectuée pour le site Nouvelle-Techno.fr. Veuillez cliquer sur le lien suivant : <a href='.$url.'>'. $url .'</a>', 'text/html');

        return $mailer->send($email);
    }
}
