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
        foreach ($reponse as $value){
            $indice=$value->getIndice();
            if ($indice<30){
                $libelle[$value->getMeddepotlegal()]='Peu dangereux';
                $class[$value->getMeddepotlegal()]='indiceV';
            }
            elseif ($indice<80){
                $libelle[$value->getMeddepotlegal()]='Normal';
                $class[$value->getMeddepotlegal()]='indiceO';
            }
            else{
                $libelle[$value->getMeddepotlegal()]='Tres dangereux';
                $class[$value->getMeddepotlegal()]='indiceR';
            }
        }
        return $this->render('pages/home.html.twig', ['Medicament' => $reponse]);
        }

}