<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

final class ChangePasswordController extends AbstractController {
    #[Route('/change-password', name: 'app_change_password')]
    public function __invoke(
        #[CurrentUser]
        User $user,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        Request $request
    ): Response {
        return $this->render('security/change_password.html.twig, [
            'controller_name' => 'ChangePasswordController',
        ]);
    }
}
