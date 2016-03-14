<?php 
namespace Tests;

use CarrinhoDeCompra\CarrinhoDeCompras;
use CarrinhoDeCompra\Item;
use CarrinhoDeCompra\MaiorPreco3;

class MaiorPrecoTest extends \PHPUnit_Framework_TestCase
{
	public function testDeveRetornarZeroSeCarrinhoVazio()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$MaiorPreco = new MaiorPreco3();
		$valor = $MaiorPreco->encontra($CarrinhoDeCompras);
		$this->assertEquals(0.0, $valor);
	}

	public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$carrinho = $CarrinhoDeCompras->adiciona(new Item("Kindle", 1, 299.00));
		$MaiorPreco = new MaiorPreco3();
		$valor = $MaiorPreco->encontra($carrinho);
		$this->assertEquals(299.00, $valor);
	}

	public function testDeveRetornarMaiorValorSeCarrinhoContemMuitosElementos()
	{
		$CarrinhoDeCompras = new CarrinhoDeCompras();
		$carrinho = $CarrinhoDeCompras->adiciona(new Item("Kindle", 2, 299.00));
		$carrinho = $CarrinhoDeCompras->adiciona(new Item("Galaxy", 1, 1400.00));		
		$carrinho = $CarrinhoDeCompras->adiciona(new Item("Google Glass", 1, 1100.00));		
		$MaiorPreco = new MaiorPreco3();
		$valor = $MaiorPreco->encontra($carrinho);
		$this->assertEquals(1400.00, $valor);
	}
}
