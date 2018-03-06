<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InvoiceController extends Controller
{
    /**
     * @Route("/invoice")
     */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }
}