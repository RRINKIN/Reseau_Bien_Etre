<?php

namespace App\DataFixtures;

use App\Entity\Commune;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommuneFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $commune = new Commune();
            $commune->setCommune($faker->city());
            $manager->persist($commune);
            $this->addReference(CommuneFixtures::class . '_' . $i , $commune);
        }
    $manager->flush();
    }
}