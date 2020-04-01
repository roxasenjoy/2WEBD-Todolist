<?php

namespace App\Controller;

use App\Entity\Invitations;
use App\Form\InvitationsType;
use App\Repository\InvitationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/invitations")
 */
class InvitationsController extends AbstractController
{
    /**
     * @Route("/", name="invitations_index", methods={"GET"})
     */
    public function index(InvitationsRepository $invitationsRepository): Response
    {
        return $this->render('pages/invitations/index.html.twig', [
            'invitations' => $invitationsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="invitations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $invitation = new Invitations();
        $form = $this->createForm(InvitationsType::class, $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($invitation);
            $entityManager->flush();

            return $this->redirectToRoute('invitations_index');
        }

        return $this->render('pages/invitations/new.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="invitations_show", methods={"GET"})
     * @param Invitations $invitation
     * @return Response
     */
    public function show(Invitations $invitation): Response
    {
        return $this->render('pages/invitations/show.html.twig', [
            'invitation' => $invitation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="invitations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Invitations $invitation): Response
    {
        $form = $this->createForm(InvitationsType::class, $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('invitations_index');
        }

        return $this->render('pages/invitations/edit.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="invitations_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Invitations $invitation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$invitation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($invitation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('invitations_index');
    }
}
