<?php

namespace App\DataFixtures;

use App\Entity\CategorieDeServices;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CategorieDeServiceFixtures extends Fixture implements DependentFixtureInterface
{   
    public function load(ObjectManager $manager): void
    {
        /** @var Generator faker */
        $faker = Factory::create();
        $categ = ['coiffure', 'massage', 'epilation', 'manicure', 'barbier', 'yoga'];
        // A mettre dans le setter de l'Entity
        $limitEnAvant = true;
        for ($i = 0; $i < 6; $i++){
            if ($i>0) {
                $limitEnAvant = false;
                $valide = $faker->boolean();
            } else {
                $valide = true;
            }
            $categorie = new CategorieDeServices();
            $categorie->setNom($categ[$i]);
            $categorie->setDescription(($faker->text(200)));
            $categorie->setEnAvant($limitEnAvant);
            $categorie->setValide($valide);
            /* persist data in the DB */
            $manager->persist($categorie);
            /* Creates a reference for this class to be consumed by another fixture */
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
