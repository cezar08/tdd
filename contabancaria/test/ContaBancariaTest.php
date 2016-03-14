<?php
namespace Tests;

use ContaBancaria\ContaBancaria as ContaBancaria;

class ContaBancariaTest extends \PHPUnit_Framework_TestCase
{

	protected $cb;
	
	protected function setUp()
	{
		$this->cb = new ContaBancaria();
	}

	public function testSaldoInicialZero()
	{
		$this->assertEquals(0, $this->cb->getSaldo());
	}

	public function testSaldoNaoPodeFicarNegativo()
	{
		try {
			$this->cb->sacarDinheiro(1);
		}
		catch (\Exception $e) {
			$this->assertEquals(0, $this->cb->getSaldo());

			return;
		}
		$this->fail();
	}

	public function testSaldoNaoPodeFicarNegativo2()
	{
		try {
			$this->cb->depositarDinheiro(-1);
		}
		catch (\Exception $e) {
			$this->assertEquals(0, $this->cb->getSaldo());

			return;
		}
		$this->fail();
	}

	public function testDepositarSacarDinheiro()
	{
		$this->assertEquals(0, $this->cb->getSaldo());
		$this->cb->depositarDinheiro(1);
		$this->assertEquals(1, $this->cb->getSaldo());
		$this->cb->sacarDinheiro(1);
		$this->assertEquals(0, $this->cb->getSaldo());
	}

	public function tearDown()
	{
		$this->cb = null;
	}	
}
