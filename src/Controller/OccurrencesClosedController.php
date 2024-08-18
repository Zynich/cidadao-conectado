<?php

namespace App\Controller;

use App\Entity\Occurrence;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
class OccurrencesClosedController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    #[Route('/occurrences/closed', name: 'occurrences_closed')]
    public function index(): Response
    {
        $occurrencesData = $this->entityManager->getRepository(Occurrence::class)->findClosedOccurrences();

        return $this->render('occurrences/occurrencesClosed.html.twig', [
            'occurrencesData' => $occurrencesData, 
        ]);
    }

    #[Route('/occurrence-reopen', name: 'occurrences_reopen', methods: ['POST'])]
    public function reopenOccurrence(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $occurrenceId = $data['occurrenceId'];

        $occurrence = $entityManager->getRepository(Occurrence::class)->find($occurrenceId);

        if (!$occurrence) {
            return new JsonResponse(['error' => 'Ocorrência não encontrada.'], Response::HTTP_NOT_FOUND);
        }
        
        $occurrence->setOccurrenceClosed(0);
        $entityManager->persist($occurrence);
        $entityManager->flush();

        return new JsonResponse(['success' => 'Ocorrência reaberta com sucesso.'], Response::HTTP_OK);
    }
}
