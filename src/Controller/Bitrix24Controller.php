<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Bitrix24Controller extends AbstractController
{
    #[Route('/bitrix24', name: 'bitrix24')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!!',
            'path' => 'src/Controller/Bitrix24Controller.php',
        ]);
    }
}
