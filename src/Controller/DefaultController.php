<?php
// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('occurrences_dashboard');
    }

    /**
     * @Route("/home", name="app_home_redirect")
     */
    public function manager(): Response
    {
        return $this->redirectToRoute('occurrences_dashboard');
    }
}