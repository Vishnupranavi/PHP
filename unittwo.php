<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
class Testclass{
	public static $attribute="welcome";
	}
final class unittwo extends Testclass{
public function testoutput():void{
$this->assertClassHasStaticAttribute('name',stdClass::class);
}
}
