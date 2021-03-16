<?php

namespace App\Controller;
use App\Entity\Medicament;

use App\Repository\MedicamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutTabMedicamentController extends AbstractController
{


    /**
     * @Route("/ajout/tab/maladie", name="ajout_tab_medicament")

     * @return Response
     */
    public function show(MedicamentRepository $medicamentRepository):Response
    {

        $reponse =$medicamentRepository->findAll();
        return $this->render('ajout_tab_medicament/index.html.twig', ['medicaments' =>$reponse]);
    }
}
