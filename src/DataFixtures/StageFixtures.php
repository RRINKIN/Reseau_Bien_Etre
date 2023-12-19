<?php

namespace App\DataFixtures;

use App\Entity\Stage;
use Faker\Factory;
use Faker\Generator;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class StageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $dateTime = new DateTime();
            $stage = new Stage();
            $stage->setNom($faker->name());
            $stage->setDescription($faker->text(50));
            $stage->setTarif($faker->numberBetween(59, 299));
            $stage->setInfoComplementaire($faker->text(100));
            $stage->setDebut($faker->dateTime());
            $stage->setFin($faker->dateTime('+3 weeks'));
            $stage->setAffichageDe($faker->dateTime());
            $stage->setAfficheJusque($faker->dateTime('+3 months'));
            /* persist data in the DB */
            $manager->persist($stage);
            $this->addReference(StageFixtures::class . '_' . $i, $stage);
        }
        $manager->flush();
    }
}
