<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OccurrenceSubtypeController extends AbstractController
{
    #[Route('/occurrenceSubtype/subtype', name: 'app_type')]
    public function index(): Response
    {
        return $this->render('occurrenceType/subtype/occurrenceSubtype.html.twig', [
            'controller_name' => 'subtypeController',
        ]);
    }
}
