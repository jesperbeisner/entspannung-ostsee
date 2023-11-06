<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

/**
 * @extends AbstractRepository<User>
 */
class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', '=', $email)->first();
    }
}
