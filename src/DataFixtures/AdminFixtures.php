<?php

namespace App\DataFixtures;


use App\Entity\User;
use Faker\Factory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Constraints\Date;

class AdminFixtures extends Fixture
{
    // Constructeur required to implement $hashing library
    private $userPasswordHasherInterface;
    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->userPasswordHasherInterface = $userPasswordHasherInterface;
    }

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
        // Hashing the password
        $plainTextPassword = 'test123$';
        $hashedPassword = $this-> userPasswordHasherInterface->hashPassword(
            $user,
            $plainTextPassword
        ); 
        $user->setPassword($hashedPassword);
        $user->setRoles(['ROLE_ADMIN']);
        //$user->setCodePostal($this->getReference(CodePostalFixtures::class . '_' . 0))
        //$user->setCommune();
        //$user->setLocalite();
        $manager->persist($user);
        $this->addReference(AdminFixtures::class . '_0' , $user);
        $manager->flush();
    }
}
