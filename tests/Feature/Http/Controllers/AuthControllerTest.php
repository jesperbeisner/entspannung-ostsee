<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

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
}
