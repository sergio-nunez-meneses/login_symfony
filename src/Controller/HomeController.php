<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{

  public function index(): Response
  {
    $id = 1;
    return new Response('<h1>Howdy, <em>stranger!</em><h1>');
  }
}
