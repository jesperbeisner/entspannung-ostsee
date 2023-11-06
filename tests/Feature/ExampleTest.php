<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

final class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testTheApplicationReturnsASuccessfulResponse(): void
    {
        $this
            ->get(route('index.index'))
            ->assertStatus(Response::HTTP_OK)
        ;
    }
}
