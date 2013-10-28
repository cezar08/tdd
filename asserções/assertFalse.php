<?php
class FalsoTest extends PHPUnit_Framework_TestCase
{
	public function testFalha()
	{
		$this->assertFalse(TRUE);
	}
}
?>