<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class unit5 extends TestCase
{
    public function testFailure(): void
    {
        $this->assertContainsOnly('string', ['1', '2', 3]);
    }
}
