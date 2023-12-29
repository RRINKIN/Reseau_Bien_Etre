<?php

namespace App\DataFixtures;

use App\Entity\Abus;
use DateTime;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class AbusFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        $dateTime = new DateTime();
        for ($i = 0; $i < 20; $i++){
            $abus = new Abus();
            $abus->setDescription($faker->text(50));
            $abus->setEncodage($dateTime);
            // link to other table
            $abus->setInternaute($this->getReference(InternauteFixtures::class . '_' . $i));
            $abus->setCommentaire($this->getReference(CommentaireFixtures::class . '_' . $i));
            /* persist data in the DB */
            $manager->persist($abus);
            $this->addReference(AbusFixtures::class . '_' . $i, $abus);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            InternauteFixtures::class,
            CommentaireFixtures::class,
        ];
    }
}
