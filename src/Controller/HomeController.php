<?php


namespace App\Controller;


use App\Entity\Medicament;
use App\Form\MedicamentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{



    public function Formulaire():Response
    {
                // creates a task object and initializes some data for this example
                $medicament = new Medicament();
                $form = $this->createForm(MedicamentType::class);
                return $this->render('pages/AjoutMedicament.html.twig', ['form' => $form->createView(),]);
        }
}