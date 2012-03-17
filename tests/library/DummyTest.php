<?php
require_once 'PHPUnit\Framework\TestCase.php';
/**
 * test case.
 */
class DummyTest extends PHPUnit_Framework_TestCase
{
	
	public function testFoo()
	{
		$this->assertTrue(true);
	}
	
	public function testBar()
	{
		$this->assertFalse(false);
		$this->assertEquals(1, 1);
	}
}


