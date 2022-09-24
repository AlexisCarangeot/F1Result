<?php

namespace App\Controller;

use App\Repository\PiloteRepository;
use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassementController extends AbstractController
{
    /**
     * @Route("/classement", name="classement")
     */
    public function index(PiloteRepository $piloteRepository,TeamRepository $teamRepository): Response
    {
        return $this->render('classement/index.html.twig', [
            'teams' => $teamRepository->findAll(),
            'pilotes' => $piloteRepository->findAll(),
            'controller_name' => 'ClassementController',
        ]);
    }
}
