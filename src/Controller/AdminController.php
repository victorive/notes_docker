<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin', methods: ['GET'])]
    public function index(): Response
    {
        return new Response(
            '<h1>ADMIN</h1>'
        );
    }

    #[Route('/access-denied', name: 'access_denied', methods: ['GET'])]
    public function denyAccess(Session $session): Response
    {
        return new Response(
            '<p>You do not have the permission to access this resource</p>', 403
        );
    }
}
