<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\RuntimeException;
use App\Factories\Models\UserFactory;
use App\Interfaces\PasswordServiceInterface;
use App\Models\User;
use App\Repositories\UserRepository;

/**
 * @see \Tests\Feature\Services\UserServiceTest
 */
final readonly class UserService
{
    public function __construct(
        private PasswordServiceInterface $passwordService,
        private UserRepository $userRepository,
    ) {
    }

    public function create(string $email, string $password): User
    {
        if (!str_contains($email, '@')) {
            throw new RuntimeException('An email must contain at least one "@".');
        }

        if (null !== $this->userRepository->findByEmail($email)) {
            throw new RuntimeException('There is already a user with this email address.');
        }

        if (strlen($password) < 10) {
            throw new RuntimeException('A password must be at least 10 characters long.');
        }

        if (strlen($password) > 100) {
            throw new RuntimeException('A password may be a maximum of 100 characters long.');
        }

        $hashedPassword = $this->passwordService->hash($password);

        $user = UserFactory::create($email, $hashedPassword);

        $this->userRepository->save($user);

        return $user;
    }
}
