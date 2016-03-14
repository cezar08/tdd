<?php 
namespace Tests;

use CarrinhoDeCompra\CarrinhoDeCompras;
use CarrinhoDeCompra\Item;

class CarrinhoDeComprasTest extends \PHPUnit_Framework_TestCase
{
	public function testDeveRetornarZeroSeCarrinhoVazio()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$valor = $CarrinhoDeCompras->maiorValor();
		$this->assertEquals(0.0, $valor);
	}

	public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$CarrinhoDeCompras->adiciona(new Item("Kindle", 1, 299.00));		
		$valor = $CarrinhoDeCompras->maiorValor();
		$this->assertEquals(299.00, $valor);
	}

	public function testDeveRetornarMaiorValorSeCarrinhoContemMuitosElementos()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$CarrinhoDeCompras->adiciona(new Item("Kindle", 2, 299.00));
		$CarrinhoDeCompras->adiciona(new Item("Galaxy", 1, 1400.00));		
		$CarrinhoDeCompras->adiciona(new Item("Google Glass", 1, 1100.00));			
		$valor = $CarrinhoDeCompras->maiorValor();
		$this->assertEquals(1400.00, $valor);
	}
}