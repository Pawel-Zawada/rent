<?php

namespace App\Controller;

use App\Entity\Factuur;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class InvoiceController extends Controller
{
    /**
     * @Route("/invoice")
     */
    public function index(Request $request)
    {
        $user = $this->getUser();
        $factuur = new Factuur();
        $factuur->setFactuurdatum(getdate());

        $form = $this->createFormBuilder($factuur)
            ->add('kenteken', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create factuur'))
            ->getForm();
        return $this->render('invoice/invoice.html.twig', ['user' => $user, 'form' => $form->createView()]);
    }
}