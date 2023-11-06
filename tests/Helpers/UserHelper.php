<?php

declare(strict_types=1);

namespace Tests\Helpers;

use App\Factories\Models\UserFactory;
use App\Models\User;

final class UserHelper
{
    public static function getUser(): User
    {
        return UserFactory::create('test@example.com', 'Password12345');
    }
}
