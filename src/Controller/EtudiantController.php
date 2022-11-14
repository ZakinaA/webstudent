<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Etudiant;
use App\Form\EtudiantType;
use Symfony\Component\HttpFoundation\Request;

class EtudiantController extends AbstractController
{
    //[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        /*
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
        */
        $annee = '2023';
        return $this->render('etudiant/accueil.html.twig', ['pAnnee' => $annee,
       ]);	
    }

    public function ajouter(ManagerRegistry $doctrine, Request $request): Response
    {
        $etudiant = new etudiant();
	$form = $this->createForm(EtudiantType::class, $etudiant);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
            $etudiant = $form->getData();
 
            $entityManager = $doctrine->getManager();
            $entityManager->persist($etudiant);
            $entityManager->flush();
 
	    return $this->render('etudiant/consulter.html.twig', ['etudiant' => $etudiant,]);
	}
	else
        {
            return $this->render('etudiant/ajouter.html.twig', array('form' => $form->createView(),));
	}
        
        
        
        
        /*$entityManager = $doctrine->getManager();

        // instanciation d'un objet Etudiant
        $etudiant = new Etudiant();
        $etudiant->setNom('Potter');
        $etudiant->setPrenom('Harry');
        $etudiant->setDateNaiss(new \DateTime(date('1980-07-31')));
	    //$etudiant->setVille('Surrey');

        
        $entityManager->persist($etudiant);
        $entityManager->flush();

        //return new Response('Saved new product with id '.$etudiant->getId());
        return $this->render('etudiant/consulter.html.twig', [
            'etudiant' => $etudiant,]);*/
    }
}
