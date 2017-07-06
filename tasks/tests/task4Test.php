<?php
require "../tasks/task4.php";
require_once "PHPUnit/Autoload.php";

class Task4Test extends PHPUnit_Framework_TestCase {

	public function testLetter() {
		$c1 = new ContextT4(4400, 5500);
		$this->assertEquals("ResultT4 Object ( [easy] => 18 [hard] => 57 [winner] => Hard method wins ) ", print_r(equalizeMethods($c1)));
	}
}

?>