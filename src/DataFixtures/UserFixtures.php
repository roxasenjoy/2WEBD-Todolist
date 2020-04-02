<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture{

    public function load(ObjectManager $manager){

       for($i = 0; $i<10;$i++){
           $user = (new User())
               ->setEmail("$i@gmail.com")
               ->setFirstname("firstname-$i")
               ->setLastname("lastname-$i")
               ->setPassword("andrew");

           $manager->persist($user);
       }
       $manager->flush();
    }

}
