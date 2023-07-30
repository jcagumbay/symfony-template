<?php
declare(strict_types=1);

namespace BillionDollarApp\Registration\Ui\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'registration')]
    public function list(): Response
    {
        return new Response('Please register.');
    }
}