<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmanarController extends AbstractController
{
    #[Route('/emanar', name: 'app_emanar')]
    public function index(): Response
    {
        return $this->render("index.html.twig");
    }
}
