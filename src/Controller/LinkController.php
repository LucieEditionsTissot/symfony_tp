<?php

namespace App\Controller;

use App\Entity\Link;
use App\Repository\LinkRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/link', name: 'app_link', methods: ['GET'])]
class LinkController extends AbstractController
{
    #[Route('', name: 'index', methods: ['GET'])]
    #[ParamConverter('get')]
    public function index(LinkRepository $link): Response
    {
        $links = $link->findAll();
        return $this->render('link/index.html.twig', [
            'links' => $links,
        ]);
    }

    #[Route('/link/{id}', name: 'delete', methods: ['DELETE'])]
    #[ParamConverter('link')]
    public function delete(LinkRepository $link, Link $id) {
        $link->remove($id);
        return $this->render('link/index.html.twig', [
            'links' => $link,
        ]);
    }

    #[Route('/{id}', name: 'save', methods: ['POST'])]
    #[ParamConverter('link')]
    public function save(LinkRepository $link, Link $id) {
        $link->save($id);
        return $this->render('link/index.html.twig', [
            'links' => $link,
        ]);
    }


}
