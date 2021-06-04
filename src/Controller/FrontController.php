<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="app_front_index")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    // /**
    //  * @Route("/signup", name="app_front_signup")
    //  */
    // public function signup(): Response
    // {
    //     return $this->render('front/signup.html.twig', [
    //         'controller_name' => 'FrontController',
    //     ]);
    // }

    // /**
    //  * @Route("/login", name="app_front_login")
    //  */
    // public function login(): Response
    // {
    //     return $this->render('front/login.html.twig', [
    //         'controller_name' => 'FrontController',
    //     ]);
    // }
}
