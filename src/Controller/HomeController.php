<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="login")
     */
    public function login()
    {
        return $this->redirectToRoute('app_login');
    }

    /**
     * @Route("/registerTest", name="register")
     */
    public function register()
    {
        return $this->redirectToRoute('app_register');
    }
}
