<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository; // autowiring
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository) // autowiring
    {
      $this->repository = $repository;
    }

    /**
     * @Route("/user", name="user.index")
     * @return Response
     */
    public function index(): Response
    {
      $users = $this->repository->findAll();
      dump($users);

      return $this->render('user/index.html.twig', [
        'active_page' => 'users',
        'users' => $users
      ]);

  }
}
