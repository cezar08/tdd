<?php
namespace ContaBancaria;

class ContaBancaria
{
	protected $saldo = 0;

	public function getSaldo()
	{
		return $this->saldo;
	}

	protected function setSaldo($saldo)
	{	
		if ($saldo >= 0) {
			$this->saldo = $saldo;
		} else {
			throw new \Exception('Exceção Conta Bancaria');
		}
	}

	public function depositarDinheiro($saldo)
	{
		$this->setSaldo($this->getSaldo() + $saldo);

		return $this->getSaldo();
	}

	public function sacarDinheiro($saldo)
	{
		$this->setSaldo($this->getSaldo() - $saldo);
		
		return $this->getSaldo();
	}
}
