<?php

namespace App\DataFixtures;

use App\Entity\Prestataire;
use Faker\Factory;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class PrestataireFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $dateTime = new DateTime();
            $user = new Prestataire();
            $user->setEmail($faker->email());
            $user->setAdresseNum($faker->randomDigit());
            $user->setAdresseRue($faker->streetName());
            $user->setInscription($dateTime);
            $user->setBanni(False);
            $user->setPassword('test123$');
            $user->setRoles(['ROLE_PREST']);
            $user->setNom($faker->name());
            $user->setNumTVA($faker->randomDigit());
            $user->setNumTel($faker->phoneNumber());
            $user->setSiteInternet('http://www.selegua.be');
            /* collects "stages" from StageFixtures */
            $user->addStage($this->getReference(StageFixtures::class . '_' . $i));
            /* persist data in the DB */
            $manager->persist($user);
            /* Creates a reference for this clas to be consumed by another fixture */
            $this->addReference(PrestataireFixtures::class . '_' . $i, $user);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            StageFixtures::class,
        ];
    }
}
