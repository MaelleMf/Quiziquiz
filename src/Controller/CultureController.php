<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CultureController extends AbstractController
{
    /**
     * @Route("/culture", name="culture")
     */
    public function index(): Response
    {
        return $this->render('culture/index.html.twig', [
            'controller_name' => 'CultureController',
        ]);
    }
}
