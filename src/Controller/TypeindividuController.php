<?php

namespace App\Controller;

use App\Entity\TypeIndividu;
use App\Form\TypeIndividuType;
use App\Repository\TypeIndividuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeindividuController extends AbstractController

{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }


    /**
     * @Route("/typeindividu", name="typeindividu")
     */
    public function index( TypeIndividuRepository $typRepo): Response
    {
        $types=$typRepo->findByTinLibelle();


        return $this->render('typeindividu/index.html.twig', ["types"=>$types
        ]);
    }
    /**
     * @Route("/sup/type", name="sup_type")
     * @param Request $request
     * @return Response
     */


    public function sup(Request $request): Response
    {
        $id = $request->request->get("type_individu");
        dump($id);

        if (isset ($_GET['id']))
        {
            $type_individu= new TypeIndividu();
            $type_individu->setTinId($id);

            $this->entityManager->remove($type_individu);
            $this->entityManager->flush();
        }
        return $this->render('sup_type/index.html.twig', [
            'controller_name' => 'TypeIndividuController',
        ]);
    }

    /**
     * @Route("/ajout/type", name="ajout_type")
     * @param Request $request
     * @return Response
     */
    public function Formulaire(Request $request, EntityManagerInterface $em): Response
    {
        $type_individu = new TypeIndividu();
        $form = $this->createForm(TypeIndividuType::class, $type_individu);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $type_individu= $form->getNormData();
            $em->persist($type_individu);
            $em->flush();
            return $this->redirectToRoute('home');
        }



        return $this->render('ajout_type/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}



