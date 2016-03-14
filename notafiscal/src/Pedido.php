<?php 
namespace NotaFiscal;

class Pedido
{
	private $cliente;

	private $valorTotal;

	private $quantidadeItens;

	public function setPedido(
		$cliente, 
		$valorTotal,
	 	$quantidadeItens
 	)
	{
		$this->cliente = $cliente;
		$this->valorTotal = $valorTotal;
		$this->quantidadeItens = $quantidadeItens;		
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function getValorTotal()
	{
		return $this->valorTotal;
	}

	public function getQuantidadeItens()
	{
		return $this->quantidadeItens;
	}
}
