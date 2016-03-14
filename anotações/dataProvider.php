<?php
class DadosTest extends PHPUnit_Framework_TestCase
{
   /**    
    * @dataProvider provedor
    */
    public function testSoma($a, $b, $c)
    {
	   $this->assertEquals($c, $a +$b);
    }

    public function provedor()
    {
    	return array(
    		array(0, 0, 0),
    		array(0, 1, 1),
    		array(1, 0, 1),
    		array(1, 3, 4)
    	);
    }
}
