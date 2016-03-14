<?php
namespace NumerosRomanos;

class ConversorDeNumeroRomano 
{
	protected $converteArray; 
	
	public function __construct()
	{
		$this->converteArray = array(
			'I' => '1', 'V' => '5', 'X' => '10',
			'L' => '50', 'C' => '100', 'D' => '500',
			'M' => '1000'
		);									
	}	

	public function converte($numeroEmRomano) 
	{
		$acumulador = 0;
		$ultimoVizinhoDaDireita = 0;
	
		for($i = strlen($numeroEmRomano) - 1; $i >= 0 ; $i--) {
			echo $numeroEmRomano[$i]; 
			$atual = $this->converteArray[$numeroEmRomano[$i]];
			// se o da direita for menor, o multiplicaremos
			// por -1 para torná-lo negativo
			$multiplicador = 1;
			
			if($atual < $ultimoVizinhoDaDireita) 
				$multiplicador = -1;

			$acumulador += $atual * $multiplicador;
			// atualiza o vizinho da direita
			$ultimoVizinhoDaDireita = $atual;
		}

		return $acumulador;
	}
}
