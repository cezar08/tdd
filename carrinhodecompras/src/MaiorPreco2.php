<?php 
class MaiorPreco2{

	public function encontra($carrinho){
		
		if(count($carrinho->getItens()) == 0)
			return 0;

		$itens = $carrinho->getItens();
		return $itens[0]->getValorTotal();
	}

}