<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $usernames = ['sergionm', 'juanpg', 'gonzalomc'];
        $paswords = ['sergionmpa$$', 'juanpgpa$$', 'gonzalomcpa$$'];
        $roles = ['ROLE_USER', 'ROLE_ADMIN'];

        for ($i=0; $i < 3; $i++)
        {
          $user = new User();
          $user->setUsername($usernames[$i])
              ->setRoles(array($roles[rand(0, 1)]))
              ->setPassword(password_hash($paswords[$i], PASSWORD_BCRYPT));
          $manager->persist($user);
        }

        $manager->flush();

    }

}
