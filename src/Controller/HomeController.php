<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{

  /**
   * @Route("/", name="home")
   * @return Response
   */
  public function index(): Response
  {

    return $this->render('home/home.html.twig');
    
  }
}
