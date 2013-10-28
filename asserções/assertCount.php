<?php
class ContaTest extends PHPUnit_Framework_TestCase
{
	public function testFalha(){
		$this->assertCount(0, array('foo'));
	}
}
?>