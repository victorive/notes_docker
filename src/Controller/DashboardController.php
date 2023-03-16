<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/notes', name: 'notes', methods: ['GET'])]
    public function index(): Response
    {
        return new Response(
            $this->render('note/index.html.twig')
        );
    }

    #[Route('/create', name: 'create-note', methods: ['GET'])]
    public function create(): Response
    {
        return new Response(
            $this->render('note/create.html.twig')
        );
    }
}
