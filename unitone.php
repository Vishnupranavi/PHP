<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class unitone extends TestCase{
public function testFailure():void{
$this->assertClassHasAttribute('vishnu',stdClass::class);
}
}
