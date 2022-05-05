<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class unitfour extends TestCase
{
    public function testFailure(): void
    {
        $this->assertStringContainsStringIgnoringCase('name', 'bar');
    }
}
