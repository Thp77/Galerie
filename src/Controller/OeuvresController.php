<?php

namespace App\Controller;

use App\Entity\Chef;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class OeuvresController extends AbstractController
{


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/oeuvres', name: 'oeuvres')]
    public function index(): Response
    {


        $chef = $this->entityManager->getRepository(Chef::class)
            ->findAll();

        return $this->render('oeuvres/index.html.twig', [

            'chef' => $chef
        ]);
    }
}