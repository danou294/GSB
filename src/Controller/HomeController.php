<?php


namespace App\Controller;

use App\Entity\Medicament;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MedicamentType;
use Twig\Environment;

class HomeController extends AbstractController
{



    public function Formulaire(Request $request):Response
    {
        $token = $request->request->get('_csrf_token');
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('addMedoc', $token)) {
                $medicament = new Medicament();
            $medicament->setMedDepotlegal($request->request->get('Depot_legal'));
            $medicament->setMedNomcommercial($request->request->get('nom_commercial'));
            $medicament->setMedPrixechantillon($request->request->get('prix'));
            $medicament->setMedComposition($request->request->get('composition'));
            $medicament->setMedContreindic($request->request->get('mnc'));
            $medicament->setMedEffets($request->request->get('effet'));
            dd($medicament);
            // ORM
        }

        return $this->render('pages/AjoutMedicament.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }

}