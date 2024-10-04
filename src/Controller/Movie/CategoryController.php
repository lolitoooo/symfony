<?php

declare(strict_types=1);

namespace App\Controller\Movie;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    #[Route(path: '/category', name: 'show_category')]
    public function category(): Response
    {
        return $this->render('movie/category.html.twig');
    }

    #[Route(path: '/discover', name: 'discover')]
    public function discover(): Response
    {
        return $this->render('movie/discover.html.twig');
    }

    
}