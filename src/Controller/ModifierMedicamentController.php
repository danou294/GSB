<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifierMedicamentController extends AbstractController
{
    /**
     * @Route("/modifier/medicament/", name="modifier_medicament")
     */
    public function index($id): Response
    {
        return $this->render('modifier_medicament/index.html.twig', [
            'controller_name' => 'ModifierMedicamentController',
        ]);
    }
}
