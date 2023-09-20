<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWordController extends AbstractController
{
    #[Route('/helloWord', name: 'app_public_hello_word')]
    public function index(): Response
    {
        return $this->render('hello_word/index.html.twig', [
            'controller_name' => 'HelloWordController',
        ]);
    }
    #[Route('/BigNoob', name: 'app_public_BigNoob')]
    public function nom(): Response
    {
        return $this->render('hello_word/index.html.twig', [
            'controller_name' => 'HelloWordController',
            'nom'=>'BigNoob'
        ]);
    }
}
