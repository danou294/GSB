<?php

namespace App\Controller;


use App\Entity\TypeIndividu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutClientController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }

    /**
     * @Route("/ajout/client", name="ajout_client")
     * @param Request $request
     * @return Response
     */


    public function Formulaire(Request $request): Response
    {
        $type_individu= new TypeIndividu();

        dump($request);

        $libelle = $request->request->get("type_individu");
        dump($libelle);

        if (isset ($libelle)){
            $type_individu->setTinLibelle($libelle);

            $this->entityManager->persist($type_individu);
            $this->entityManager->flush();

        }

        return $this->render('ajout_client/index.html.twig', [
            'controller_name' => 'TypeIndividuController',
        ]);
    }

}