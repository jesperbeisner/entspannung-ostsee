<?php

declare(strict_types=1);

namespace App\Services;

use App\Interfaces\PasswordServiceInterface;
use Illuminate\Contracts\Hashing\Hasher as HashServiceInterface;

final readonly class PasswordService implements PasswordServiceInterface
{
    public function __construct(
        private HashServiceInterface $hashService,
    ) {
    }

    public function hash(string $password): string
    {
        return $this->hashService->make($password);
    }

    public function check(string $password, string $hashedPassword): bool
    {
        return $this->hashService->check($password, $hashedPassword);
    }
}
