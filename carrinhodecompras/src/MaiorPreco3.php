<?php 
namespace CarrinhoDeCompra;

class MaiorPreco3
{
	public function encontra($carrinho)
	{
		if(count($carrinho) == 0)
			return 0;

		$maior = 0;

		foreach($carrinho->getItens() as $item){
			
			if($maior < $item->getValorTotal())
				$maior = $item->getValorTotal();
			
		}

		return $maior;
	}
}