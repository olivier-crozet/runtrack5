<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{

     /**
     * @Route("/", name="home")
     */
    public function home()
        {
            return $this->render('my_entreprise/home.html.twig');
        }
    /**
     * @Route("/MyEntreprise", name="my_entreprise")
     */
    public function index()
    {
        return $this->render('my_entreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }
// ma merde

    
}
