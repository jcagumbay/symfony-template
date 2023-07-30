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
        $hue = random_int(0, 360);
        $darkColor = static fn (float $alpha = 1) => "hsla($hue, 20%, 45%, $alpha)";
        $lightColor = static fn (float $alpha = 1) => "hsla($hue, 20%, 95%, $alpha)";

        return $this->render('registration/register.html.twig', [
            'hue' => $hue,
            'darkColor' => $darkColor(),
            'lightColor' => $lightColor(),
            'number' => random_int(0, 100),
            'homeUrl' => $this->generateUrl('home')
        ]);
    }
}