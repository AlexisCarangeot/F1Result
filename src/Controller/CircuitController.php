<?php

namespace App\Controller;

use App\Entity\Circuit;
use App\Form\CircuitType;
use App\Repository\CircuitRepository;
use Locale;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class CircuitController extends AbstractController
{
    /**
     * @Route("calendrier", name="circuit_index", methods={"GET"})
     */
    public function index(CircuitRepository $circuitRepository): Response
    {

        return $this->render('circuit/index.html.twig', [
            'circuits' => $circuitRepository->findAll(),
            'circuitsSort' => $circuitRepository->findAllSort(),
        ]);
    }

    /**
     * @Route("admin/circuit", name="circuit_new", methods={"GET","POST"})
     */
    public function new(Request $request,CircuitRepository $circuitRepository): Response
    {
        $circuit = new Circuit();
        $form = $this->createForm(CircuitType::class, $circuit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($circuit);
            $entityManager->flush();

            return $this->redirectToRoute('circuit_new');
        }

        return $this->render('circuit/new.html.twig', [
            'circuits' => $circuitRepository->findAll(),
            'circuit' => $circuit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("circuit/{id}", name="circuit_show", methods={"GET"})
     */
    public function show(Circuit $circuit): Response
    {
        return $this->render('circuit/show.html.twig', [
            'circuit' => $circuit,
        ]);
    }

    /**
     * @Route("admin/circuit/{name}", name="circuit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Circuit $circuit): Response
    {
        $form = $this->createForm(CircuitType::class, $circuit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('circuit_new');
        }

        return $this->render('circuit/edit.html.twig', [
            'circuit' => $circuit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("circuit/{id}", name="circuit_delete", methods={"POST"})
     */
    public function delete(Request $request, Circuit $circuit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$circuit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($circuit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('circuit_new');
    }
}
