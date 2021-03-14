<?php

namespace App\Controller;

use App\Entity\TypeIndividu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupClientController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this -> entityManager = $entityManager;
    }
    /**
     * @Route("/sup/client", name="sup_client")
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
        return $this->render('sup_client/index.html.twig', [
            'controller_name' => 'TypeIndividuController',
        ]);
    }
}
