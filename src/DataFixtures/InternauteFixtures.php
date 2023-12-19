<?php

namespace App\DataFixtures;

use App\Entity\Internaute;
use Faker\Factory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class InternauteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $dateTime = new DateTime();
            $user = new Internaute();
            $user->setEmail($faker->email());
            $user->setAdresseNum($faker->randomDigit());
            $user->setAdresseRue($faker->streetName());
            $user->setInscription($dateTime);
            $user->setBanni(False);
            $user->setPassword('test123$');
            $user->setRoles(['ROLE_INTER']);
            $user->setNom($faker->name());
            $user->setPrenom($faker->firstname());
            $user->setNewsletter($faker->boolean());
            $manager->persist($user);
            $this->addReference(InternauteFixtures::class . '_' . $i, $user);
        }
        $manager->flush();
    }
}
