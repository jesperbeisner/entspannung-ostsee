<?php

declare(strict_types=1);

namespace App\Factories\Models;

use App\Models\User;
use Ramsey\Uuid\Uuid;

final readonly class UserFactory
{
    public static function create(string $email, string $password): User
    {
        $user = new User();

        $user->id = Uuid::uuid7()->toString();
        $user->email = $email;
        $user->password = $password;

        return $user;
    }
}
