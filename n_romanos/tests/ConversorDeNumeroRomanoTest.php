<?php

	 require getcwd().'/n_romanos/src/ConversorDeNumeroRomano.php';

	 class ConversorDeNumeroRomanoTest extends PHPUnit_Framework_TestCase {	 	
	
		public function testDeveEntenderOSimboloI() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("I");
			
			$this->assertEquals(1, $numero);
		}


		public function testDeveEntenderOSimboloV() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("V");
			
			$this->assertEquals(5, $numero);
		}

		public function testDeveEntenderOSimboloX() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("X");
			
			$this->assertEquals(10, $numero);
		}

		public function testDeveEntenderOSimboloVI() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("VI");
			
			$this->assertEquals(6, $numero);
		}

		public function testDeveEntenderOSimboloIII() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("III");
			
			$this->assertEquals(3, $numero);
		}

		public function testDeveEntenderOSimboloVIII() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("VIII");
			
			$this->assertEquals(8, $numero);
		}

		public function testDeveEntenderOSimboloIV() {
			$romano = new ConversorDeNumeroRomano();
			$numero = $romano->converte("IV");
			
			$this->assertEquals(4, $numero);
		}
}
?>