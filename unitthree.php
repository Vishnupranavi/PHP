<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class unitthree extends TestCase
{
    public function testFailure(): void
    {
        $this->assertStringContainsString('arr', 'val');
    }
}

