<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CorpsController extends AbstractController
{
    /**
     * @Route("/corps", name="corps")
     */
    public function index(): Response
    {
        return $this->render('corps/index.html.twig', [
            'controller_name' => 'CorpsController',
        ]);
    }
}
