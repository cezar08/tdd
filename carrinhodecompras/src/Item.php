<?php 
class Item{

	private $descricao;
	private $quantidade;
	private $valorUnitario;

	public function __construct($descricao, $quantidade, $valorUnitario){
		$this->descricao = $descricao;
		$this->quantidade = $quantidade;
		$this->valorUnitario = $valorUnitario;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function setQuatidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function setValorUnitario($valorUnitario){
		$this->valorUnitario = $valorUnitario;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function getValorUnitario(){
		return $this->valorUnitario;
	}

	public function getValorTotal(){
		return $this->valorUnitario * $this->quantidade;
	}

}

?>