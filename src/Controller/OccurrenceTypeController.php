<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OccurrenceTypeController extends AbstractController
{
    #[Route('/occurrenceType/type', name: 'app_type')]
    public function index(): Response
    {
        return $this->render('occurrenceType/type/occurrenceType.html.twig', [
            'controller_name' => 'typeController',
        ]);
    }
}
