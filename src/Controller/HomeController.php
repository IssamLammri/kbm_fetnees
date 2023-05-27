<?php

namespace App\Controller;

use App\Entity\Salle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function __construct(
        private ManagerRegistry $managerRegistry
    )
    {
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $salleRepository = $this->managerRegistry->getRepository(Salle::class);
        dump($salleRepository->findAll());
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/home', name: 'home_page')]
    public function homePage(): Response
    {
        $age = 15 +251 ;
        return $this->render('home/new_page.html.twig', [
            'controller_name' => 'HomeController',
            'age'=> $age
        ]);
    }
}
