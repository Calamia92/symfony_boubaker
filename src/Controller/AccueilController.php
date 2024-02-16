<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;

class AccueilController extends AbstractController
{
   
    #[Route('/accueil', name: 'app_accueil', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('accueil/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

}
