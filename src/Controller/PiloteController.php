<?php

namespace App\Controller;

use App\Entity\Pilote;
use App\Form\PiloteType;
use App\Repository\PiloteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class PiloteController extends AbstractController
{
    /**
     * @Route("pilote", name="pilote_index", methods={"GET"})
     */
    public function index(PiloteRepository $piloteRepository): Response
    {
        return $this->render('pilote/index.html.twig', [
            'pilotes' => $piloteRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/pilote", name="pilote_new", methods={"GET","POST"})
     */
    public function new(PiloteRepository $piloteRepository,Request $request): Response
    {
        $pilote = new Pilote();
        $form = $this->createForm(PiloteType::class, $pilote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pilote);
            $entityManager->flush();

            return $this->redirectToRoute('pilote_new');
        }

        return $this->render('pilote/new.html.twig', [
            'pilotes' => $piloteRepository->findAll(),
            'pilote' => $pilote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("pilote/{surname}", name="pilote_show", methods={"GET"})
     */
    public function show(Pilote $pilote): Response
    {
        return $this->render('pilote/show.html.twig', [
            'pilote' => $pilote,
        ]);
    }

    /**
     * @Route("admin/pilote/{surname}", name="pilote_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pilote $pilote): Response
    {
        $form = $this->createForm(PiloteType::class, $pilote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pilote_new');
        }

        return $this->render('pilote/edit.html.twig', [
            'pilote' => $pilote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("pilote/{id}", name="pilote_delete", methods={"POST"})
     */
    public function delete(Request $request, Pilote $pilote): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pilote->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pilote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pilote_new');
    }
}
