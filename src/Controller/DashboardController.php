<?php

namespace App\Controller;

use App\Entity\Tasks;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {

        $repo = $this->getDoctrine()->getRepository(Tasks::class);
        $tasks = $repo->findAll();


        return $this->render('pages/dashboard/dashboard.html.twig', [
            'tasks' => $tasks
        ]);
    }
}
