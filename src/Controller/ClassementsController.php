<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassementsController extends AbstractController
{
    /**
     * @Route("/classements", name="classements")
     */
    public function index(): Response
    {
        return $this->render('classements/index.html.twig', [
            'controller_name' => 'ClassementsController',
        ]);
    }
}
