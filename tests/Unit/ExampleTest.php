<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testThatTrueIsTrue(): void
    {
        $this->assertSame(1, rand(0, 1));
    }
}
