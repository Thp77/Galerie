<?php

namespace App\Controller;

use App\Entity\Chef;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class ArtistesController extends AbstractController
{


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/artistes', name: 'artistes')]
    public function index(): Response
    {


        $chef = $this->entityManager->getRepository(Chef::class)
            ->findAll();

        return $this->render('artistes/index.html.twig', [

            'chef' => $chef
        ]);
    }
}
