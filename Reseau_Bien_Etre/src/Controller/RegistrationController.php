<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

    public function __invoke(User $user, UserPasswordHasherInterface $userPasswordHasherInterface): User
    {
        $user->setInscription(new \DateTime());
        // Setting inscription to falls (even if false as default)
        $user->setInscritpionConfirmation(false);
        // Encription passwork
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
            return $this->render('mail/index.html.twig', [
                'controller_name' => 'MailController',
            ]);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }
    }
}