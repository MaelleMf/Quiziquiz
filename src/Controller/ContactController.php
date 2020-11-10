<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        $formulaire = $this->createFormBuilder()
            ->add('email', EmailType::class) 
            ->add('name', TextType::class)
            -> add('avis', TextareaType::class)
            ->add('send',SubmitType::class)
            ->getForm();

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'contact_form' => $formulaire->createView(),
        ]);
    }
}
