<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CgvController extends AbstractController
{
    #[Route('/mention-legale', name: 'app_cgv')]
    public function index(): Response
    {
        return $this->render('cgv/index.html.twig');
    }
}
