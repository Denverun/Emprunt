<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use phpDocumentor\Reflection\Types\Integer;
use phpDocumentor\Reflection\Types\String_;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $roles = array('God');
        $user ->setUsername('Jacqueszhu')
            ->setEmail('jacqueszhu94@gmail.com')
            ->setPassword('MotDePasse')
            ->setRoles($roles)
            ->setFirstName('Jacques')
            ->setLastName('Zhu')
            ->setUid(0);
        $manager->persist($user);

        $user = new User();
        $roles = array('Eleve');
        $user ->setUsername('Eleve1')
            ->setEmail('Eleve1@gmail.com')
            ->setPassword('MotDePasse')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('1')
            ->setUid(1);
        $manager->persist($user);

        $user = new User();
        $roles = array('Eleve');
        $user ->setUsername('Eleve2')
            ->setEmail('Eleve2@gmail.com')
            ->setPassword('MotDePasse')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('2')
            ->setUid(2);
        $manager->persist($user);

        $user = new User();
        $roles = array('Eleve');
        $user ->setUsername('Eleve3')
            ->setEmail('Eleve3@gmail.com')
            ->setPassword('MotDePasse')
            ->setRoles($roles)
            ->setFirstName('Eleve')
            ->setLastName('3')
            ->setUid(3);
        $manager->persist($user);

        for ( $i=0; $i++;$i<10){
            $user = new User();
            $roles = array('Membre');
            $username = 'Membre'.$i;
            $user ->setUsername('Membre' . $i)
                ->setEmail('Membre'.$i.'@gmail.com')
                ->setPassword('MotDePasse')
                ->setRoles($roles)
                ->setFirstName('Membre')
                ->setLastName($i)
                ->setUid(4+$i);
            $manager->persist($user);
        }
        for ( $i=10; $i<100;$i++){
            $user = new User();
            $roles = array('Eleve');
            $username = 'Eleve'.$i;
            $user ->setUsername($username)
                ->setEmail('Eleve'.$i.'@gmail.com')
                ->setPassword('MotDePasse')
                ->setRoles($roles)
                ->setFirstName('Eleve')
                ->setLastName($i)
                ->setUid(14+$i);
            $manager->persist($user);
        }



        $manager->flush();
    }
}
