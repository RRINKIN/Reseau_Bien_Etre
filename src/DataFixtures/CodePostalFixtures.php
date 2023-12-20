<?php

namespace App\DataFixtures;

use App\Entity\CodePostal;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CodePostalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $codePostal = new CodePostal();
            $codePostal->setCodePostal($faker->postcode());
            $manager->persist($codePostal);
            $this->addReference(CodePostalFixtures::class . '_' . $i , $codePostal);
        }
    $manager->flush();
    }
}