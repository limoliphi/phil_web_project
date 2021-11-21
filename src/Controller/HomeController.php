<?php

namespace App\Controller;

use App\Repository\BlogpostRepository;
use App\Repository\OeuvreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(OeuvreRepository $oeuvreRepository, BlogpostRepository $blogpostRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'oeuvres' => $oeuvreRepository->lastThreeOeuvres(),
            'blogposts' => $blogpostRepository->lastThreeBlogposts(),
        ]);
    }
}
