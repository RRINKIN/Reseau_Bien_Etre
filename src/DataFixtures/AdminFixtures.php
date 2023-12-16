<?php

namespace App\DataFixtures;


use App\Entity\User;
use Faker\Factory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        $dateTime = new DateTime();
        $user = new User();
        $user->setEmail($faker->email());
        $user->setAdresseNum($faker->randomDigit());
        $user->setAdresseRue($faker->streetName());
        $user->setInscription($dateTime);
        $user->setBanni(False);
        $user->setPassword('test123$');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);
        $this->addReference(User::class . '_0' , $user);
        $manager->flush();
    }
}
