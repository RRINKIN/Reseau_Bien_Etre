<?php

namespace App\DataFixtures;

use App\Entity\Internaute;
use Faker\Factory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class InternauteFixtures extends Fixture implements DependentFixtureInterface
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
        for ($i = 0; $i < 20; $i++){
            $dateTime = new DateTime();
            $user = new Internaute();
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
            $user->setRoles(['ROLE_INTER']);
            $user->setNom($faker->name());
            $user->setPrenom($faker->firstname());
            $user->setNewsletter($faker->boolean());
            $user->setCodePostal($this->getReference(CodePostalFixtures::class . '_' . $i));
            $user->setCommune($this->getReference(CommuneFixtures::class . '_' . $i));
            $user->setLocalite($this->getReference(LocaliteFixtures::class . '_' . $i));
            $manager->persist($user);
            $this->addReference(InternauteFixtures::class . '_' . $i, $user);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            CodePostalFixtures::class,
            CommuneFixtures::class,
            LocaliteFixtures::class,
        ];
    }
}
