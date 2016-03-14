<?php
class ExcecaoTest extends PHPUnit_Framework_TestCase
{
    /**    
    * @expectedException InvalidArgumentException
    * @expectedExceptionMessage Alguma Mensagem
    */
    public function testExcecaoTemMensagemCerta()
    {
	   throw new InvalidArgumentException('Alguma Mensagem', 20);
    }
	
    /**    
    * @expectedException InvalidArgumentException
    * @expectedExceptionCode 20
    */
    public function testExcecaoTemCodigoCerto()
    {
	   throw new InvalidArgumentException('Alguma Mensagem', 20);
    }    
}
