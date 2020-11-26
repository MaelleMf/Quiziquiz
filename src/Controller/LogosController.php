<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogosController extends AbstractController
{
    /**
     * @Route("/logos", name="logos")
     */
    public function index(): Response
    {
        return $this->render('logos/index.html.twig', [
            'controller_name' => 'LogosController',
        ]);
    }
}
