<?php

namespace App\DataFixtures;

use App\Entity\Promotion;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class PromotionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++){
            $indexCateg = rand(0, 3);
            $promotion = new Promotion();
            $promotion->setNom($faker->name());
            $promotion->setDescription($faker->text(50));
            $promotion->setDocumentPdf($faker->url());
            $promotion->setDebut($faker->dateTime());
            $promotion->setFin($faker->dateTime('+3 weeks'));
            $promotion->setAffichageDe($faker->dateTime());
            $promotion->setAffichageJusque($faker->dateTime('+3 months'));
            // link to other table
            $promotion->setPrestataire($this->getReference(PrestataireFixtures::class . '_' . $i));
            $promotion->setCategorieDeServices($this->getReference(CategorieDeServiceFixtures::class . '_' . $indexCateg));
            /* persist data in the DB */
            $manager->persist($promotion);
            $this->addReference(PromotionFixtures::class . '_' . $i, $promotion);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            PrestataireFixtures::class,
            CategorieDeServiceFixtures::class,
        ];
    }
}
