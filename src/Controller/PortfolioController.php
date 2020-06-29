<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('portfolio2/home.html.twig', [
        ]);
    }

    /**
     * @Route("/Oh-My-Cats", name="OhMyCats")
     */
    public function OhMyCats()
    {
        return $this->render('ohmycats/ohmycats.html.twig', [
        ]);
    }

    /**
     * @Route("/Rent-A-Car", name="RentAcar")
     */
    public function RentAcar()
    {
        return $this->render('rentacar/rentacar.html.twig', [
        ]);
    }

    /**
     * @Route("/Multi-website", name="MultiWebsite")
     */
    public function MultiWebsite()
    {
        return $this->render('multi/multi.html.twig', [
        ]);
    }

    /**
     * @Route("/Happy-tours", name="HappyTours")
     */
    public function HappyTours()
    {
        return $this->render('happytours/happytours.html.twig', [
        ]);
    }
}
