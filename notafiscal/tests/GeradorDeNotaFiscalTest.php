<?php 

require getcwd().'/notafiscal/src/GeradorDeNotaFiscal.php';

require getcwd().'/notafiscal/src/Pedido.php';


class GeradorDeNotaFiscalTest extends PHPUnit_Framework_TestCase{

	public function testDeveGerarNFComValorDeImpostoDescontado(){
		$GeradorDeNotaFiscal = new GeradorDeNotaFiscal($this->mockPeriste());
		$Pedido = new Pedido();
		$Pedido->setPedido("Bob", 4000, 1);
		$NotaFiscal = $GeradorDeNotaFiscal->gerar($Pedido);
		$this->assertEquals(4000 * 0.82, $NotaFiscal->getValor());

	}


	public function testDevePersistirNFGerada(){
		$mock = $this->mockPeriste();
		
		$GeradorDeNotaFiscal = new GeradorDeNotaFiscal($mock);
		$Pedido = new Pedido();
		$Pedido->setPedido("Bob", 4000, 1);

		$NotaFiscal = $GeradorDeNotaFiscal->gerar($Pedido);
		
		
	}

	private function mockPeriste(){
		$mock = $this->getMock('Persiste', array('persistir'));
		$mock->expects($this->any())
		->method('persistir')
		->will($this->returnValue(true));
		return $mock;
	}

}