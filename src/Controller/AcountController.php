<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/account', name: 'index', methods: ['GET'])]
class AcountController extends AbstractController
{
    #[Route('/settings', name: 'app_acount', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('acount/index.html.twig', [
            'account' => 'AcountController',
        ]);
    }
}
