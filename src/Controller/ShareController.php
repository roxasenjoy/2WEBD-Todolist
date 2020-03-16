<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShareController extends AbstractController
{
    /**
     * @Route("/share", name="share")
     */
    public function index()
    {
        return $this->render('share/share.html.twig', [
            'controller_name' => 'ShareController',
        ]);
    }
}
