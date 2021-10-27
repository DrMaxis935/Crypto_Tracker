<?php

namespace App\Controller;

use App\Entity\Wallet;
use App\Repository\WalletRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DashboardController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/dashboard")
     */
    public function dashboard(): Response
    {
        $this->getDoctrine()->getRepository(Wallet::class)->createWallet();

        $api_url = $this->getParameter('coinmarketcap.api.url');
        $token = $this->getParameter('coinmarketcap.api.token');

        $response = $this->client->request(
            'GET',
            $api_url,
            [
                'query' => [
                    'start' => 1,
                    'limit' => 5,
                    'convert' => 'USD'
                ],
                'headers' => [
                    'Accept' => 'application/json',
                    'X-CMC_PRO_API_KEY' => $token
                ]
            ]
        );

        $currencies = $response->toArray()['data'];

        return $this->render('dashboard.html.twig', [
            'api_url' => $api_url,
            'currencies' => $currencies
        ]);
    }
}