<?php

declare(strict_types=1);

namespace App\Controller\Other;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConfirmController extends AbstractController
{
    #[Route(path:'/confirm', name: 'confirm')]
    public function confirm(): Response
    {
        return $this->render('other/confirm.html.twig');
    }

}