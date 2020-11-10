<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CapitalesController extends AbstractController
{
    /**
     * @Route("/capitales", name="capitales")
     */
    public function index(): Response
    {
        return $this->render('capitales/index.html.twig', [
            'controller_name' => 'CapitalesController',
        ]);
    }
}
