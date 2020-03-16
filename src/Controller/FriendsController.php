<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FriendsController extends AbstractController
{
    /**
     * @Route("/friends", name="friends")
     */
    public function friends()
    {
        return $this->render('friends/friends.html.twig', [
            'controller_name' => 'FriendsController',
        ]);
    }


    /**
     * @Route("/friends/add", name="add_friends")
     */
    public function add_friends()
    {
        return $this->render('friends/add_friends.html.twig', [
            'controller_name' => 'FriendsController',
        ]);
    }
}
