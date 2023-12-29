<?php

namespace App\DataFixtures;

use App\Entity\Bloc;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class BlocFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $bloc = new Bloc();
            $bloc->setNom($faker->name());
            $bloc->setDescription($faker->word());
            /* persist data in the DB */
            $manager->persist($bloc);
            $this->addReference(BlocFixtures::class . '_' . $i, $bloc);
        }
        $manager->flush();
    }
}
