<?php
require "../tasks/task3.php";
require_once "PHPUnit/Autoload.php";

class Task3Test extends PHPUnit_Framework_TestCase {

	public function testLetter() {
		$abc = new Triangle('abc', 10, 20, 22.36);
		$qwe = new Triangle('qwe', 5, 9.3, 6.66);
		$rty = new Triangle('rty', 66, 33, 47);
		$arr = [$abc, $qwe, $rty];

		$this->assertEquals("728.99931412862<br/>99.9999997112<br/>16.089539180474", implode("<br/>", geron($arr)));
	}
}

?>