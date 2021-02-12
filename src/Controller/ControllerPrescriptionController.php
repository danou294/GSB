<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerPrescriptionController extends AbstractController
{
    /**
     * @Route("/controller/prescription", name="controller_prescription")
     */

    public function index (): Response
    {
        return $this->render('pages/Prescription.html.twig', [
            'controller_name' => 'ControllerPrescriptionController'
        ]);
    }
}
