<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Form\TasksType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/adds", name="add")
     */
    public function index(Request $request)
    {
        $tasks = new Tasks();
        $form = $this->createForm(TasksType::class, $tasks);
        $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $tasks = $form->getData();
                $entityManager  = $this->getDoctrine()->getManager();
                $entityManager ->persist($tasks);
                $entityManager ->flush();

                return $this->redirectToRoute('dashboard');
            }

        return $this->render('/pages/add/add.html.twig', [
        'form' => $form->createView()
        ]);
    }
}
