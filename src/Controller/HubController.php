<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/hub', name: 'app_hub-')]
final class HubController extends AbstractController
{
    #[Route('', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('hub/index.html.twig');
    }
    #[Route('/aboutUs', name: 'app_about_us')]
    public function aboutUs(): Response
    {
        return $this->render('hub/aboutUs.html.twig');
    }
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('hub/login.html.twig');
    }
    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('hub/register.html.twig');
    }
}
