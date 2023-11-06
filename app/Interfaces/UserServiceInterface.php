<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Models\User;

interface UserServiceInterface
{
    public function findUser(): ?User;

    public function getUser(): User;
}
