<?php
class PilhaTest extends PHPUnit_Framework_TestCase
{
	public function testVazio()
	{
		$pilha = array();
		$this->assertEmpty($pilha);
		return $pilha;
	}

	/**
	*@depends testVazio
	*/

	public function testPush(array $pilha){
		array_push($pilha, 'foo');
		$this->assertEquals('foo', $pilha[count($pilha)-1]);
		$this->assertNotEmpty($pilha);

		return $pilha;
	}

	/**
	* @depends testPush
	*/

	public function testPop(array $pilha)
	{
		$this->assertEquals('foo', array_pop($pilha));
		$this->assertEmpty($pilha);
	}
}
