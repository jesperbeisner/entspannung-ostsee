<?php

declare(strict_types=1);

namespace Tests\Feature\Services;

use App\Exceptions\RuntimeException;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

/**
 * @covers \App\Services\UserService
 */
final class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testThrowsExceptionWhenEmailDoesNotContainAtSymbol(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('An email must contain at least one "@".');

        $userService = $this->app->make(UserService::class);

        $userService->create('test', '1234567890');
    }

    public function testThrowsExceptionWhenUserWithThisEmailAlreadyExists(): void
    {
        User::factory()->create(['email' => 'test@example.com']);

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('There is already a user with this email address.');

        $userService = $this->app->make(UserService::class);

        $userService->create('test@example.com', '1234567890');
    }

    public function testThrowsExceptionPasswordIsNotLongEnough(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('A password must be at least 10 characters long.');

        $userService = $this->app->make(UserService::class);

        $userService->create('test@example.com', Str::random(9));
    }

    public function testThrowsExceptionPasswordIsTooLong(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('A password may be a maximum of 100 characters long.');

        $userService = $this->app->make(UserService::class);

        $userService->create('test@example.com', Str::random(101));
    }

    public function testCreatesANewUserAndSavesToDatabase(): void
    {
        $this->assertNull(User::where('email', '=', 'test@example.com')->first());

        $userService = $this->app->make(UserService::class);

        $userService->create('test@example.com', 'password123');

        $this->assertNotNull(User::where('email', '=', 'test@example.com')->first());
    }
}
