<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/ressources-gratuites", name="ressources_gratuites")
     */
    public function freeRessources(): Response
    {
        return $this->render('free_ressources.html.twig');
    }

    /**
     * @Route("/appel-gratuit", name="appel_gratuit")
     */
    public function phoneCallBooking(): Response
    {
        return $this->render('phone_call_booking.html.twig');
    }

    /**
     * @Route("/presentation", name="about")
     */
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/produits", name="products")
     */
    public function products(): Response
    {
        return $this->render('products.html.twig');
    }

    /**
     * @Route("/landkit", name="landkit")
     */
    public function landkit(): Response
    {
        return $this->render('landkit.html.twig');
    }
}