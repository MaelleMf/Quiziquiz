<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeographieController extends AbstractController
{
    /**
     * @Route("/geographie", name="geographie")
     */
    public function index(): Response
    {
        return $this->render('geographie/index.html.twig', [
            'controller_name' => 'GeographieController',
        ]);
    }
}
