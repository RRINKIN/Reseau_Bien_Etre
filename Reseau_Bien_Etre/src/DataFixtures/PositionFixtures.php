<?php

namespace App\DataFixtures;

use App\Entity\Position;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class PositionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $position = new Position();
            $position->setOrdre($faker->numberBetween(1, 5));
            // link to other table
            $position->setInternaute($this->getReference(InternauteFixtures::class . '_' . $i));
            $position->setBloc($this->getReference(BlocFixtures::class . '_' . $i));
            /* persist data in the DB */
            $manager->persist($position);
            $this->addReference(PositionFixtures::class . '_' . $i, $position);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            InternauteFixtures::class,
            BlocFixtures::class,
        ];
    }
}
