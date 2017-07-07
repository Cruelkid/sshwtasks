<?php
require_once 'Task.php';
class ContextT4
{
	public $min;
	public $max;

	function __construct($min, $max) {
		$this->min = $min;
		$this->max = $max;
	}			
}

class ResultT4 extends Task
{
	public $context;
	public $easy;
	public $hard;
	public $winner;

	function __construct(ContextT4 $c) {
		$this->context = $c;
	}

	function easy($n) {
		$s1 = substr($n, 0, 3);
		$s2 = substr($n, 3, 6);
		$arr1 = [substr($s1, 0, 1), substr($s1, 1, 1), substr($s1, 2, 3)];
		$arr2 = [substr($s2, 0, 1), substr($s2, 1, 1), substr($s2, 2, 3)];
		if (array_sum($arr1) == array_sum($arr2)) {
			return true;
		} else {
			return false;
		}
	}

	function hard($n) {
		$arr = [substr($n, 0, 1), substr($n, 1, 1), substr($n, 2, 1), substr($n, 3, 1), substr($n, 4, 1), substr($n, 5, 1)];
		$odd = [];
		$even = [];
		for ($i = 0; $i < count($arr); $i++) {
			if($arr[$i] % 2 == 0) {
				array_push($even, $arr[$i]);
			} else {
				array_push($odd, $arr[$i]);
			}
		}

		if (array_sum($odd) == array_sum($even)) {
			return true;
		} else {
			return false;
		}
	}

	function equalizeMethods() {
		$easy = 0;
		$hard = 0;
		for ($i = $this->context->min; $i <= $this->context->max; $i++) {
			if ($this->easy($i)) {
				$this->easy = $easy++;
			}
			if ($this->hard($i)) {
				$this->hard = $hard++;
			}
		}
		if ($this->easy > $this->hard) {
			$this->winner = "Easy method wins";
		} else {
			$this->winner = "Hard method wins";
		}
		return "Easy: " . $this->easy . "<br/>" . "Hard: " . $this->hard . "<br/>" . $this->winner;
	}

	function isValid() {
		if (!(strlen($this->context->max) > 6)) {
			return true;
		} else {
			return false;
		}
	}

	function validate() {
		if ($this->isValid()) {
			$this->addZeros($this->context->min);
			$this->addZeros($this->context->max);
			return true;
		} else {
			throw new Exception("Max number is too long", 1);
		}
	}

	function addZeros($number)
	{
		if (strlen($number) < 6) {
			while (strlen($number)!=6) {
				$number = 0 . $number;
			}
		}
	}

	function run() {
		echo $this->equalizeMethods();
	}

}
