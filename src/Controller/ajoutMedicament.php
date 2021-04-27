<?php


namespace App\Controller;

use ContainerCDEsyw9\getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService;
use App\Entity\Medicament;
use App\Entity\ContreIndic;
use App\Repository\MedicamentRepository;
use ContainerCDEsyw9\getDoctrine_CacheClearMetadataCommandService;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MedicamentType;
use Twig\Environment;


class ajoutMedicament extends AbstractController
{
    /**
     * @var $MedicamentRepository
     */
    private $Repository;

    public function __construct(MedicamentRepository $Repository){
        $this->repository = $Repository;
    }


    /**
     * @Route("/ajoutMedicament", name="ajout_medicament")
     */
    public function Ajout(Request $request, MedicamentRepository $medicamentRepository):Response
    {
        $token = $request->request->get('_csrf_token');
        $medicament = $medicamentRepository->findAll();
        if ($request->isMethod('POST') && $this->isCsrfTokenValid('addMedoc', $token)) {
            $medicament = new Medicament();
            $medicament->setMedNomcommercial($request->request->get('nom_commercial'));
            $medicament->setMedPrixechantillon($request->request->get('prix'));
            $medicament->setMedComposition($request->request->get('composition'));

            $medicament->setMedEffets($request->request->get('effet'));
            $medicament->setFamCode($request->request->get('codefamille'));
            $medicament->setImage('asterix');

            // ORM
            $em = $this->getDoctrine()->getManager();
            $em->persist($medicament);
            $em->flush();
            return $this->redirectToRoute('home');

            $contreIndic = $request->request->get('contreIndic[]');
            var_dump($contreIndic);
            foreach ($contreIndic as $value)
            {
                $medoc = new ContreIndic();
                $medoc->setIdcontreindic();

                $em->persist($medoc);
                $em->flush();
                $medicament->setMedContreindic($request->request->get('mnc'));
            }

        }


        return $this->render('pages/AjoutMedicament.html.twig', [
            'Medicament' => $medicament,
        ]);
    }





    /**
     * @route("admin/{id}", name="admin.medicament.edit")
     * @param Medicament $medicament
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function edit(Medicament $medicament, Request $request)
    {
        $form = $this->createForm(MedicamentType::class, $medicament);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('home');
        }


        return $this->render('/modifier_medicament/index.html.twig',[
            'medicament' =>  $medicament,
        'form' => $form->createView()
            ]);
    }

}