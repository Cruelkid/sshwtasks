<?php
require "../tasks/task1.php";
require_once "PHPUnit/Autoload.php";

class Task1Test extends PHPUnit_Framework_TestCase {

	public function testChess() {
		$this->assertEquals("*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*</br>*&nbsp*&nbsp*&nbsp</br>", chess(3, 3, '*'));
	}
}

?>