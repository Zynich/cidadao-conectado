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
class OccurrencesManagementController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }
    /**
     * @Route("/manager/occurrences/management", name="occurrences_management")
     */
    public function index(): Response
    {
        $occurrencesData = $this->entityManager->getRepository(Occurrence::class)->findOpenOccurrencesWithAddress();

        return $this->render('occurrences/occurrencesManagement.html.twig', [
            'occurrencesData' => $occurrencesData,
        ]);
    }
}