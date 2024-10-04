<?php

declare(strict_types=1);

namespace App\Controller\Other;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route(path:'/default', name: 'default')]
    public function default(): Response
    {
        return $this->render('other/default.html.twig');
    }

}