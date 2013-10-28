<?php

require getcwd().'/notafiscal/src/NotaFiscal.php';
require getcwd().'/notafiscal/src/Persiste.php';

class GeradorDeNotaFiscal{

	protected $persiste;

	public function __construct(Persiste $persiste){
		$this->persiste = $persiste;
	}

	public function gerar(Pedido $pedido){
		$NotaFiscal = new NotaFiscal();
		$NotaFiscal->setNotaFiscal($pedido->getCliente(), $pedido->getValorTotal() * 0.82, date('Y-m-d'));
		$this->persiste->persistir($NotaFiscal);
		
		return $NotaFiscal;
	}

}