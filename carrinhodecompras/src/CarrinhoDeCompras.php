<?php 

class CarrinhoDeCompras{

	private $itens;

	public function __construct(){
		$this->itens = array();
	}

	public function adiciona($item){
		$this->itens[] = $item;
		return $this;
	}

	public function getItens(){
		return $this->itens;
	}

	
}
