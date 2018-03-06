<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function index(AuthorizationCheckerInterface $authChecker)
    {
        $user = $this->getUser();
        return $this->render('home/home.html.twig', ['user' => $user]);
    }
}