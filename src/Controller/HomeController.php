<?php


namespace App\Controller;

use ContainerCDEsyw9\getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService;
use App\Entity\Medicament;
use App\Repository\MedicamentRepository;
use ContainerCDEsyw9\getDoctrine_CacheClearMetadataCommandService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MedicamentType;
use Twig\Environment;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;




class HomeController extends AbstractController
{

    public function index(MedicamentRepository $repoMedicament):Response
    {
        $reponse = $repoMedicament->findAll();
        return $this->render('pages/home.html.twig', ['Medicament' => $reponse]);
        }

}