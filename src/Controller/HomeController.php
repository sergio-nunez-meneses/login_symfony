<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController
{

  /**
   * @var Environment
   */
  private $twig;

  public function __construct(Environment $twig)
  {
    $this->twig = $twig;
  }

  public function index(): Response
  {
    $repository = $this->getDoctrine()->getRepository(Users::class);
    $users = $repository->findAll();
    var_dump($users);

    $id = 1;
    $user = $repository->find($id);
    var_dump($user);


    return new Response($this->twig->render('pages/home.html.twig'));
  }
}
