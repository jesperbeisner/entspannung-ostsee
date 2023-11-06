<?php

declare(strict_types=1);

namespace App\Services;

use App\Exceptions\ThisShouldNeverHappenException;
use App\Interfaces\UserServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

final readonly class UserService implements UserServiceInterface
{
    public function findUser(): ?User
    {
        $user = Auth::user();

        if ($user === null) {
            return null;
        }

        if ($user instanceof User) {
            return $user;
        }

        throw new ThisShouldNeverHappenException();
    }

    public function getUser(): User
    {
        return $this->findUser() ?? throw new ThisShouldNeverHappenException();
    }
}
