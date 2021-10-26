<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionAddController extends AbstractController
{
    /**
     * @Route("/transactions/add")
     */
    public function dashboard(): Response
    {
        return $this->render('transaction.add.html.twig');
    }
}