<?php

namespace App\DataFixtures;

use App\Entity\Localite;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LocaliteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $localite = new Localite();
            $localite->setLocalite($faker->state());
            $manager->persist($localite);
            $this->addReference(LocaliteFixtures::class . '_' . $i , $localite);
        }
    $manager->flush();
    }
}