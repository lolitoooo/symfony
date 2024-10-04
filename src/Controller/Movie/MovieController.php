<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController {
    
    #[Route(path: '/detail', name: 'show_movie')]
    public function movie(): Response {
        return $this->render('movie/detail.html.twig');
    }

    #[Route(path: '/detail_serie', name: 'show_serie')]
    public function serie(): Response {
        return $this->render('movie/detail_serie.html.twig');
    }
}