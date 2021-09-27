<?php

namespace App\Traits;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

trait CustomResetPassword {
    public function verifications($user, $userEmail, $email, $passwordEncoder,$oldPassword, $newPassword ){
        if($userEmail === $email){
            $passwordValide = $passwordEncoder->isPasswordValid($user, $oldPassword);

            if($passwordValide){
                $this->resetPassword($passwordEncoder,$newPassword);
                $this->addFlash('success', 'Le mot de passe a changer');
                
            }else{
                    $this->addFlash('error', 'Mauvais mot de passe');
                    
                }
        }else{
            $this->addFlash('error', 'L\'email est incorrecte');
        } 
        
    }
    public function resetPassword($passwordEncoder, $newPassword) {
        $user = $this->getUser();
        $newEncodedPassword = $passwordEncoder->encodePassword($user, $newPassword);
        $user->setPassword($newEncodedPassword);
        
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();  
    }
}