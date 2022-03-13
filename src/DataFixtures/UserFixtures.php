<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user0 = new User();
        $roles = array('God');
        $user0 ->setUsername('Jacqueszhu')
            ->setEmail('jacqueszhu94@gmail.com')
            ->setPassword('MotDePasse0')
            ->setRoles($roles)
            ->setFirstName('Jacques')
            ->setLastName('Zhu')
            ->setUid(0);
        $manager->persist($user0);

        $user1 = new User();
        $roles = array('Eleve');
        $user1 ->setUsername('Eleve1')
            ->setEmail('Eleve1@gmail.com')
            ->setPassword('MotDePasse1')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('1')
            ->setUid(1);
        $manager->persist($user1);

        $user2 = new User();
        $roles = array('Eleve');
        $user2 ->setUsername('Eleve2')
            ->setEmail('Eleve2@gmail.com')
            ->setPassword('MotDePasse2')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('2')
            ->setUid(2);
        $manager->persist($user2);

        $user3 = new User();
        $roles = array('Eleve');
        $user3 ->setUsername('Eleve3')
            ->setEmail('Eleve3@gmail.com')
            ->setPassword('MotDePasse3')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('3')
            ->setUid(3);
        $manager->persist($user3);


        $manager->flush();
    }
}
