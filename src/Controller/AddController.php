<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index()
    {
            return $this->render('add/add.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }
}
