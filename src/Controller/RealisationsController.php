<?php

namespace App\Controller;

use App\Repository\OeuvreRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationsController extends AbstractController
{
    /**
     * @Route("/realisations", name="realisations")
     */
    public function index(
        OeuvreRepository $oeuvreRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $data = $oeuvreRepository->findAll();

        $oeuvres = $paginator->paginate($data, $request->query->getInt('page', 1), 6);

        return $this->render('realisations/index.html.twig', [
            'oeuvres' => $oeuvres,
        ]);
    }
}
