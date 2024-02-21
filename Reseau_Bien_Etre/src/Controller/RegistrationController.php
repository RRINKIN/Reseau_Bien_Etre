<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

#[AsController]
class RegistrationController extends AbstractController
{
    private $userPasswordHasherInterface;
    public function __construct()
    {}
    
    // Function called by API Platform when call on api/users
    public function __invoke(User $user, UserPasswordHasherInterface $userPasswordHasherInterface): User
    {
        $user->setInscription(new \DateTime());
        // Setting inscription to falls (even if false as default)
        $user->setInscritpionConfirmation(false);
        // Encription password
        $hashedPassword = $userPasswordHasherInterface->hashPassword(
            $user,
            $user->getPassword()
        ); 
        $user->setPassword($hashedPassword);
        return $user;
    }

    #[Route('/verify_email', name: 'app_verify_email')]
    public function emailVerification(EmailVerifier $emailVerifier, EntityManagerInterface $em, Request $request){
        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $id=$request->query->get('id');
            $user=$em->getRepository(User::class)->find($id);
            $emailVerifier->handleEmailConfirmation($request, $user);
            // return JSON to Next.JS iso HTML
            return new JsonResponse(["error"=>false, "message"=>"confirmé"]);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());
            return new JsonResponse(["error"=>true, "message"=>$exception->getReason()]);
        }
    }
}