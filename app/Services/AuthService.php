<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class AuthService implements AuthServiceInterface
{
    public function login(User $user): void
    {
        Auth::login($user);
    }

    public function logout(): void
    {
        Auth::logoutCurrentDevice();
    }
}
