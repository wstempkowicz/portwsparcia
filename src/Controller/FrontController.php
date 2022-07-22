<?php
// src/Controller/FrontController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
     /**
     * @Route("/", name="app_front_contact")
     */
    public function contact(): Response
    {
        $number = random_int(0, 100);

        return $this->render('front/contact.html.twig',[]);
    }
}