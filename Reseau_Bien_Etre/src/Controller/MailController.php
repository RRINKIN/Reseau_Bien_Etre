<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Address;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;

class MailController extends AbstractController
{
    #[Route('/mail', name: 'app_mail')]
    public function index(EmailVerifier $emailVerifier, EntityManagerInterface $em): Response
    {
        // generate a signed url and email it to the user
        $user=$em->getRepository(User::class)->find(1294);
        $emailVerifier->sendEmailConfirmation('api_app_verify_email', $user,
        (new TemplatedEmail())
            ->from(new Address('mailer@example.com', 'Reseau Bien-être'))
            ->to($user->getEmail())
            ->subject('Please Confirm your Email')
            ->htmlTemplate('registration/confirmation_email.html.twig')
    );
        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }
}
