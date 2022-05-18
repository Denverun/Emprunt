<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Equipment;
class EquipmentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $equipment0 = new Equipment();
        $equipment0 ->setName('Commande')
            ->setDescription('Permet de modifier le site et les donnees')
            ->setQuantity(1)
            ->setAvailableStock(0)
            ->setAllowedDays(0)
            ->setUid(0);
        $manager->persist($equipment0);

        $equipment1 = new Equipment();
        $equipment1 ->setName('Jeu1')
            ->setDescription('Cest le jeu 1')
            ->setQuantity(1)
            ->setAvailableStock(0)
            ->setAllowedDays(10)
            ->setUid(1);
        $manager->persist($equipment1);

        $equipment2 = new Equipment();
        $equipment2 ->setName('Jeu2')
            ->setDescription('Cest le jeu 2')
            ->setQuantity(2)
            ->setAvailableStock(1)
            ->setAllowedDays(20)
            ->setUid(2);
        $manager->persist($equipment2);

        $equipment3 = new Equipment();
        $equipment3 ->setName('Jeu3')
            ->setDescription('Cest le jeu 3')
            ->setQuantity(3)
            ->setAvailableStock(2)
            ->setAllowedDays(30)
            ->setUid(3);
        $manager->persist($equipment3);

        for ( $i=1; $i<100;$i++){
            $equipment0 = new Equipment();
            $equipment0 ->setName('Objet'.$i)
                ->setDescription('Objet'.$i .'sale')
                ->setQuantity(10)
                ->setAvailableStock(9)
                ->setAllowedDays(20)
                ->setUid($i+10);
            $manager->persist($equipment0);
        }



        $manager->flush();
    }
}
