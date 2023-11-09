<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Tests\Helpers\UserHelper;
use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\AuthController
 */
final class AuthControllerTest extends TestCase
{
    public function testCanViewLoginPage(): void
    {
        $this
            ->get(route('login'))
            ->assertStatus(Response::HTTP_OK)
            ->assertViewIs('auth.login')
        ;
    }

    public function testRedirectsToHomeWhenLoggedIn(): void
    {
        $this
            ->actingAs(UserHelper::getUser())
            ->get(route('login'))
            ->assertRedirectToRoute('index')
        ;
    }
}
