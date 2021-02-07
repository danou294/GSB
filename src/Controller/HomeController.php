<?php


namespace App\Controller;


use App\Entity\Medicament;
use App\Form\MedicamentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{



    public function Formulaire($request):Response
    {
        $token = $request->request->get('_csrf_token');
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('addMedoc', $token)) {
                $medicament = new Medicament();
            $medicament->set($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            $medicament->setNom($request->request->get('nom'));
            // ORM
        }

        return $this->render('medicament/index.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }

}