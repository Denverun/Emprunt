<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Borrowing;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;  //Pour load Borrowing apres Equipment et User
class BorrowingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $repo1 = $manager -> getRepository(User::class);
        $repo2 = $manager -> getRepository(Equipment::class);
        $users = $repo1 ->findAll();
        $equipments = $repo2 ->findAll();
        $date0 = new DateTime('2000-01-01');
        echo $date0->format('Y-m-d H:i:s');
        $date00 = new DateTime('3000-01-01');
        echo $date00->format('Y-m-d H:i:s');
        $date1 = new DateTime('2021-03-13');
        echo $date1->format('Y-m-d H:i:s');
        $date11 = new DateTime('2021-03-20');
        echo $date11->format('Y-m-d H:i:s');
        $date2 = new DateTime('2021-03-13');
        echo $date2->format('Y-m-d H:i:s');
        $date22 = new DateTime('2021-03-27');
        echo $date22->format('Y-m-d H:i:s');
        $date3 = new DateTime('2021-03-13');
        echo $date3->format('Y-m-d H:i:s');
        $date33 = new DateTime('2021-04-04');
        echo $date33->format('Y-m-d H:i:s');

        $borrowing = new Borrowing();
        $borrowing ->setLendBy($users[0])
            ->setBorrowedBy($users[0])
            ->setEquipment($equipments[0])
            ->setStartedOn($date0)
            ->setEndedOn($date00)
            ->setAllowedDays(1000000)
            ->setRemarks('Pret eternel');
        $manager->persist($borrowing);
        $manager->flush();

        $borrowing = new Borrowing();
        $borrowing ->setLendBy($users[0])
            ->setBorrowedBy($users[1])
            ->setEquipment($equipments[1])
            ->setStartedOn($date1)
            ->setEndedOn($date11)
            ->setAllowedDays(7)
            ->setRemarks('Jeu neuf');
        $manager->persist($borrowing);
        $manager->flush();

        $borrowing = new Borrowing();
        $borrowing ->setLendBy($users[0])
            ->setBorrowedBy($users[2])
            ->setEquipment($equipments[2])
            ->setStartedOn($date2)
            ->setEndedOn($date22)
            ->setAllowedDays(14)
            ->setRemarks('Jeu use');
        $manager->persist($borrowing);
        $manager->flush();

        $borrowing = new Borrowing();
        $borrowing ->setLendBy($users[0])
            ->setBorrowedBy($users[3])
            ->setEquipment($equipments[3])
            ->setStartedOn($date3)
            ->setEndedOn($date33)
            ->setAllowedDays(21)
            ->setRemarks('Jeu tres deteriore');
        $manager->persist($borrowing);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class, EquipmentFixtures::class
        ];
    }

}
