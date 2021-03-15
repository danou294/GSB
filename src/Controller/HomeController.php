<?php


namespace App\Controller;

use ContainerCDEsyw9\getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService;
use App\Entity\Medicament;
use ContainerCDEsyw9\getDoctrine_CacheClearMetadataCommandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MedicamentType;
use Twig\Environment;

class HomeController extends AbstractController
{

    public function Ajout(Request $request):Response
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
            // ORM
            $em = $this->getDoctrine()->getManager();
        $em->persist($medicament);
        $em->flush();
        }




        return $this->render('pages/AjoutMedicament.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }

}