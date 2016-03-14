<?php 
namespace CarrinhoDeCompra;

class CarrinhoDeCompras
{

	private $itens;

	public function __construct()
	{
		$this->itens = array();
	}

	public function adiciona($item)
	{
		$this->itens[] = $item;

		return $this;
	}

	public function getItens()
	{
		return $this->itens;
	}

	public function maiorValor()
	{
		if(count($this->itens) == 0)
			return 0;

		$maior = 0;

		foreach($this->itens as $item){
			if($maior < $item->getValorTotal())
				$maior = $item->getValorTotal();
			
		}

		return $maior;
	}
}
