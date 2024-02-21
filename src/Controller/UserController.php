<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    #[Route('/api/users', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/api/getUsers', name: 'getUser')]
    public function getUsers(UsersRepository $usersRepository, SerializerInterface $serializer): JsonResponse
    {
        $users = $usersRepository->findAll();
        $userJsonList = $serializer->serialize($users, 'json');
    
        return new JsonResponse($userJsonList, Response::HTTP_OK, [], true);
    }
    

    #[Route('/api/authenticate', name: 'api_authenticate', methods: ['POST'])]
public function authenticate(Request $request, UsersRepository $usersRepository, UserPasswordHasherInterface $passwordEncoder): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    $email = $data['email'] ?? null;
    $password = $data['password'] ?? null;

    if (!$email || !$password) {
        return new JsonResponse(['error' => 'Invalid credentials'], Response::HTTP_BAD_REQUEST);
    }

    $user = $usersRepository->findOneBy(['mail' => $email]);

    if (!$user || !$passwordEncoder->isPasswordValid($user, $password)) {
        return new JsonResponse(['error' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
    }

    return new JsonResponse(['message' => 'Authentication successful'], Response::HTTP_OK);
}

}
