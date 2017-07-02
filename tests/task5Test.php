<?php
require "../tasks/task5.php";
require_once "PHPUnit/Autoload.php";

class Task5Test extends PHPUnit_Framework_TestCase {

	public function testLetter() {
		$c2 = new ContextT5(1, 50);
		$this->assertEquals("1<br/>2<br/>3<br/>5<br/>8<br/>13<br/>21<br/>34", implode("<br/>", counter($c2)));
	}
}

?>