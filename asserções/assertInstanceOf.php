<?php
class InstanciaDeTest extends PHPUnit_Framework_TestCase
{
	public function testFalha()
	{
		$this->assertInstanceOf('RuntimeException', new Exception);
	}
}
?>