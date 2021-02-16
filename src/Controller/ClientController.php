<?php

namespace App\Controller;

use App\Entity\TypeIndividu;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }
    /**
     * @Route("/client", name="client")
     */
    public function index(): Response
    {
        $controller_name = $this->entityManager->getRepository(TypeIndividu::class)->findAll();


        return $this->render('client/index.html.twig', [
            'controller_name' => $controller_name
        ]);
    }

}
