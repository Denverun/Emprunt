<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Carte;

class CarteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i<20; $i++){
            $carte = new Carte();
            $carte ->setVie($i+2)
                    ->setAttaque($i+3)
                    ->setNom($i+4)
                    ->setCout($i+5);
            $manager->persist($carte);
        }

        $manager->flush();
    }
}
