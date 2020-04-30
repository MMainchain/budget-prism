<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SandboxController extends AbstractController
{
    /** @Route("/sandbox", name="sandbox") */
    public function dummy(): Response
    {
        return new Response('Hello world!', Response::HTTP_OK);
    }
}
