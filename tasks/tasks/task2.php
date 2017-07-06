<?php
require_once "Task.php";
function d($t){echo "<xmp>".print_r($t, 1)."</xmp>";}
function _d($t){d($t);die;}

class Letter
{
	public $a;
	public $b;

	function __construct($a, $b) {
	
		$this->a = $a;
		$this->b = $b;
	
	}
}

class MatchEnvelopes extends Task
{
	public $envelope1;
	public $envelope2;

	function __construct(Letter $l1, Letter $l2) {
		$this->envelope1 = $l1;
		$this->envelope2 = $l2;
	}

	function letter() {
		if ($this->envelope1->a < $this->envelope2->a && $this->envelope1->b < $this->envelope2->b) {
			return '1';
		} else if ($this->envelope2->a < $this->envelope1->a && $this->envelope2->b < $this->envelope1->b) {
			return '2';
		} else {
			return '0';
		}
	}

	function isValid() {
		if (!($this->envelope1->a < 0 || $this->envelope2->a < 0 || $this->envelope1->b < 0 || $this->envelope2->b < 0)) {
			return true;
		} else {
			return false;
		}
	}

	function validate() {
		if ($this->isValid()) {
			return true;
		} else {
			throw new Exception("Invalid input", 1);
		}
	}

	public function run() {
		echo $this->letter();
	}
}
