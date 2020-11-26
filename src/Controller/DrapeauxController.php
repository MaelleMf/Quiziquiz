<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrapeauxController extends AbstractController
{
    /**
     * @Route("/drapeaux", name="drapeaux")
     */
    public function index(): Response
    {
        return $this->render('drapeaux/index.html.twig', [
            'controller_name' => 'DrapeauxController',
        ]);
    }
}
