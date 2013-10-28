<?php

require getcwd().'/notafiscal/src/NotaFiscal.php';
require getcwd().'/notafiscal/src/Persiste.php';

class GeradorDeNotaFiscal2{

	public function gerar(Pedido $pedido){
		$NotaFiscal = new NotaFiscal();
		$NotaFiscal->setNotaFiscal($pedido->getCliente(), $pedido->getValorTotal() * 0.82, date('Y-m-d'));
		return $NotaFiscal;
	}

}