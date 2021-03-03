<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/", name="city")
     */
    public function index(): Response
    {
        $name_of_the_city = "Die";
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
            'city' => $name_of_the_city
        ]);
    }
     /**
     * @Route("/pointOfInterest", name="pointOfInterest")
     */
    public function pointOfInterest(): Response
    {
        $name_of_the_city = "Die";
        return $this->render('city/pointOfInterest.html.twig', [
            'controller_name' => 'CityController',
            'city' => $name_of_the_city
        ]);
    }
     /**
     * @Route("/history", name="history")
     */
    public function history(): Response
    {
        return $this->render('city/history.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }
}
