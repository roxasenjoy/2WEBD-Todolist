<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Form\TasksType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index()
    {
        $tasks = new Tasks();

        $form = $this->createForm(TasksType::class, $tasks);

            return $this->render('/pages/add/add.html.twig', [
            'controller_name' => 'AddController',
            'form' => $form->createView()
        ]);
    }
}
