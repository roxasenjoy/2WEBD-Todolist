<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Entity\User;
use App\Form\TasksType;
use App\Repository\TasksTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dashboard")
 */
class TasksController extends AbstractController
{
    /**
     * @Route("/", name="tasks_index", methods={"GET"})
     */
    public function index(): Response
    {
        if (!$this->isGranted('IS_AUTHENTICATED_FULLY')) { // Si il n'est pas connecté
            return $this->redirectToRoute('app_login'); // Retourne te connecter petit joueur
        }
        else{
            $user = $this->getUser();

            return $this->render('pages/tasks/index.html.twig', [
                'tasks' => $user->getTasks(),
            ]);
        }
    }

    /**
     * @Route("/new", name="tasks_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $task = new Tasks();
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $task->setUser($this->getUser()); /* CA TROUVE L'ID DE L'UTILISATEUR !!!!!!!!!!!!!!!!!!!!!!!! */
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();


            return $this->redirectToRoute('tasks_index');
        }
        $this->getUser();
        return $this->render('pages/tasks/new.html.twig', [
            'task' => $task,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_show", methods={"GET"})

    public function show(Tasks $task): Response
    {
        return $this->render('pages/tasks/show.html.twig', [
            'task' => $task,
        ]);
    }*/

    /**
     * @Route("/{id}/edit", name="tasks_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tasks $task): Response
    {
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('tasks_index');
        }

        return $this->render('pages/tasks/edit.html.twig', [
            'task' => $task->getId(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tasks_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tasks $task): Response
    {
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($task);
            $entityManager->flush();
        }

        return new JsonResponse(['data'], Response::HTTP_NO_CONTENT);
    }
}
