<?php

namespace App\DataFixtures;

use App\Entity\CategorieDeServices;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class CategorieDeServiceFixtures extends Fixture implements DependentFixtureInterface
{   
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        $categ = ['coiffure', 'massage', 'epilation', 'manicure', 'barbier', 'yoga'];
        for ($i = 0; $i < 6; $i++){
            $categorie = new CategorieDeServices();
            $categorie->setNom($categ[$i]);
            $categorie->setDescription(($faker->sentence()));
            $categorie->setEnAvant($faker->boolean());
            $categorie->setValide($faker->boolean());
            /* persist data in the DB */
            $manager->persist($categorie);
            /* Creates a reference for this clas to be consumed by another fixture */
            $this->addReference(CategorieDeServiceFixtures::class . '_' . $i, $categorie);
        }
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            StageFixtures::class,
            CodePostalFixtures::class,
            CommuneFixtures::class,
            LocaliteFixtures::class,
        ];
    }
}
