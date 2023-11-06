<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Models\User;

interface AuthServiceInterface
{
    public function login(User $user): void;

    public function logout(): void;
}
