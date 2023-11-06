<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Tests\Helpers\UserHelper;
use Tests\TestCase;

final class AdminControllerTest extends TestCase
{
    public function testCanViewAdminPage(): void
    {
        $this
            ->actingAs(UserHelper::getUser())
            ->get(route('admin.index'))
            ->assertStatus(Response::HTTP_OK)
            ->assertViewIs('admin.index')
        ;
    }

    public function testRedirectsToLoginWhenNotLoggedIn(): void
    {
        $this
            ->followingRedirects()
            ->get(route('admin.index'))
            ->assertStatus(Response::HTTP_OK)
            ->assertViewIs('auth.login')
        ;
    }
}
