<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutTabMaladieController extends AbstractController
{
    /**
     * @Route("/ajout/tab/maladie", name="ajout_tab_maladie")
     */
    public function index(): Response
    {
        return $this->render('ajout_tab_maladie/index.html.twig', [
            'controller_name' => 'AjoutTabMaladieController',
        ]);
    }
}
