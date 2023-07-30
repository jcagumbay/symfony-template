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
        $hue = random_int(0, 360);
        $darkColor = static fn (float $alpha = 1) => "hsla($hue, 20%, 45%, $alpha)";
        $lightColor = static fn (float $alpha = 1) => "hsla($hue, 20%, 95%, $alpha)";

        return $this->render('home/home.html.twig', [
            'hue' => $hue,
            'darkColor' => $darkColor(),
            'lightColor' => $lightColor(),
            'registrationUrl' => $this->generateUrl('registration')
        ]);
    }
}