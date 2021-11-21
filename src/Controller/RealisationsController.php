<?php

namespace App\Controller;

use App\Repository\OeuvreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationsController extends AbstractController
{
    /**
     * @Route("/realisations", name="realisations")
     */
    public function index(OeuvreRepository $oeuvreRepository): Response
    {
        return $this->render('realisations/index.html.twig', [
            'oeuvres' => $oeuvreRepository->findAll(),
        ]);
    }
}
