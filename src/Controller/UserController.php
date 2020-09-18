<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository; // autowiring
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(UsersRepository $repository) // autowiring
    {
      $this->repository = $repository;
    }

    /**
     * @Route("/user", name="user.index")
     * @return Response
     */
    public function index(): Response
    {
      $users = $this->repository->getUsersIdsNames();
      dump($users);

      return $this->render('user/index.html.twig', [
        'controller_name' => 'UserController',
        'active_link' => 'users',
        'users' => $users
      ]);

  }
}
