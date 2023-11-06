<?php

declare(strict_types=1);

namespace App\Providers;

use App\Interfaces;
use App\Repositories;
use App\Services;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Repositories\UserRepository::class);

        $this->app->bind(Interfaces\AuthServiceInterface::class, Services\AuthService::class, true);
        $this->app->bind(Interfaces\PasswordServiceInterface::class, Services\PasswordService::class, true);
        $this->app->bind(Interfaces\UserServiceInterface::class, Services\UserService::class, true);
    }
}
