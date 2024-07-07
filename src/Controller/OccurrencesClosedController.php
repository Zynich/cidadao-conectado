<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OccurrencesClosedController extends AbstractController
{
    #[Route('/occurrences/closed', name: 'occurrences_closed')]
    public function index(): Response
    {
        // Lógica para obter os dados das ocorrências (exemplo)
        $occurrences = [
            ['id' => 1, 'title' => 'Ocorrência 1'],
            ['id' => 2, 'title' => 'Ocorrência 2'],
            // Mais ocorrências...
        ];

        return $this->render('occurrences/occurrencesClosed.html.twig', [
            'occurrences' => $occurrences, // Passa os dados para o template
        ]);
    }
}
