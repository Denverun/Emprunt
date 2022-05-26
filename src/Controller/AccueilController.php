<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/", name="login")
     */
    public function login(){
        return $this->render('accueil/login.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home(){
        dump('Hello');
        return $this->render('accueil/home.html.twig');
    }

    /**
     * @Route("/connected", name="connected")
     */
    public function connected(){
        return $this->render('accueil/connected.html.twig', [

        ]);
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profil(){
        return $this->render('accueil/profil.html.twig');
    }

    /**
     * @Route("/parametres", name="parametres")
     */
    public function parametres(){
        return $this->render('accueil/parametres.twig');
    }
}
