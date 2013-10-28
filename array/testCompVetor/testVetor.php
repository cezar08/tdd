<?php
class VetorTest extends PHPUnit_Framework_TestCase
{
	public function testVazio()
	{
		$componente = array();
		$this->assertEquals(0, count($componente));
	}

	public function testPopulado()
	{
		$componente[] = 'elemento';
		$this->assertEquals(1, count($componente));
	}
}
?>