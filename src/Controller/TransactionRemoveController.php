<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransactionRemoveController extends AbstractController
{
    /**
     * @Route("/transactions/remove")
     */
    public function dashboard(): Response
    {
        return $this->render('transaction.remove.html.twig');
    }
}