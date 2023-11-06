<?php

declare(strict_types=1);

namespace App\Interfaces;

interface PasswordServiceInterface
{
    public function hash(string $password): string;

    public function check(string $password, string $hashedPassword): bool;
}
