<?php

namespace App\Controller;

use App\Entity\Prescrire;
use App\Entity\TypeIndividu;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerPrescriptionController extends AbstractController
{



    /**
     * @Route("/controller/prescription", name="prescription")
     */

    public function Formulaire ()
    {
        return $this->render('pages/Prescription.html.twig', [
            'controller_name' => 'ControllerPrescriptionController'
        ]);
    }

}
