<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        return $this->render('app/index.html.twig', []);
    }

    /**
     * @Route("/services", name="app_services")
     *
     * @return Response
     */
    public function services(): Response
    {
        return $this->render('app/services.html.twig', []);
    }
}
