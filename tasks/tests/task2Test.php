<?php
require "../tasks/task2.php";
require_once "PHPUnit/Autoload.php";

class Task2Test extends PHPUnit_Framework_TestCase {

	public function testLetter() {
		$l1 = new Letter(10, 10);
		$l2 = new Letter(15, 15);
		$this->assertEquals("1", letter($l1, $l2));
	}
}

?>