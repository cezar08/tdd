<?php
namespace NotaFiscal;

class NotaFiscal
{
	private $cliente;

	private $valor;

	private $data;

	public function setNotaFiscal($cliente, $valor, $data)
	{
		$this->cliente = $cliente;
		$this->valor = $valor;
		$this->data = $data;
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function getData()
	{
		return $this->data;
	}
}