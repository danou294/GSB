<?php

namespace App\Controller;

use App\Entity\Prescrire;
use App\Entity\TypeIndividu;
use App\Repository\DosageRepository;
use App\Repository\MedicamentRepository;
use App\Repository\PrescrireRepository;
use App\Repository\TypeIndividuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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

    public function Ajout(Request $request, MedicamentRepository $repoMedicament, DosageRepository $repoDosage, TypeIndividuRepository $repoTin ):Response
    {
        $token = $request->request->get('_csrf_token');
        $dosage = $repoDosage->findAll();
        $medicament = $repoMedicament->findAll();
        $tin = $repoTin->findAll();
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('addMedoc', $token)) {
            $prescrire = new Prescrire();
            $prescrire->setTinCode($request->request->get('ind'));
            $prescrire->setDosCode($request->request->get('dos'));
            $prescrire->setPrePosologie($request->request->get('poso'));

            // ORM
            $em = $this->getDoctrine()->getManager();
            $em->persist($prescrire);
            $em->flush();

           // return $this->redirectToRoute('pdf');
        }

        return $this->render('pages/Prescription.html.twig', [
            'dosage' => $dosage,
            'Medicament' => $medicament,
            'tin' => $tin
        ]);
    }

}
