<?php
declare(strict_types=1);

namespace BillionDollarApp\Home\Ui\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(): Response
    {
        return new Response('Hello world. This is your home page.');
    }
}