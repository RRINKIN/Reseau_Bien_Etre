<?php

namespace App\EventListener;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use App\Entity\Internaute;
use App\Entity\Prestataire;
use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mime\Address;
use App\Security\EmailVerifier;

final class UserMailRegistrationListener implements EventSubscriberInterface
{
    private EmailVerifier $emailVerifier;
    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier=$emailVerifier;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['sendMail', EventPriorities::POST_WRITE],
        ];
    }

    public function sendMail(ViewEvent $event): void
    {
        $user = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();
        if (!($user instanceof User || $user instanceof Prestataire || $user instanceof Internaute) || Request::METHOD_POST !== $method) {
            return;
        }

        $this->emailVerifier->sendEmailConfirmation('api_app_verify_email', $user,
            (new TemplatedEmail())
                ->from(new Address('mailer@example.com', 'Reseau Bien-être'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
    }
}
