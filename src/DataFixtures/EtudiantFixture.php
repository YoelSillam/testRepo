<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class EtudiantFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    { $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 100; $i++) {
            // Créez une nouvelle instance d'Etudiant à chaque itération
            $etudiant = new Etudiant();

            $genre = rand(1, 2); // Choisissez aléatoirement le genre (1 pour masculin, 2 pour féminin)


            $etudiant->setNom($faker->lastName($genre));
            $etudiant->setPrenom($faker->firstName);
            $etudiant->setAnniversaire($faker->dateTime);
            $etudiant->setSexe($genre);

            $manager->persist($etudiant);
        }

        $manager->flush();
    }
}
