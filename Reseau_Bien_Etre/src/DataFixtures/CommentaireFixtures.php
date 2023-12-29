<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use DateTime;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class CommentaireFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        $dateTime = new DateTime();
        for ($i = 0; $i < 20; $i++){
            $commentaire = new Commentaire();
            $commentaire->setTitre($faker->word());
            $commentaire->setContenu($faker->text(50));
            $commentaire->setCote($faker->randomDigit());
            $commentaire->setEncodage($dateTime);
            // link to other table
            $commentaire->setPrestataire($this->getReference(PrestataireFixtures::class . '_' . $i));
            $commentaire->setInternaute($this->getReference(InternauteFixtures::class . '_' . $i));
            /* persist data in the DB */
            $manager->persist($commentaire);
            $this->addReference(CommentaireFixtures::class . '_' . $i, $commentaire);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            PrestataireFixtures::class,
            InternauteFixtures::class,
        ];
    }
}
