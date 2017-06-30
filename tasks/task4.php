<?php

	class ContextT4 {

		public $min;
		public $max;

		function __construct($min, $max) {
			
			$this->min = $min;
			$this->max = $max;

		}			

	}

	function easy($n) {
		$s1 = substr($n, 0, 3);
		$s2 = substr($n, 3, 6);
		$arr1 = [substr($s1, 0, 1), substr($s1, 1, 1), substr($s1, 2, 3)];
		$arr2 = [substr($s2, 0, 1), substr($s2, 1, 1), substr($s2, 2, 3)];
		if(array_sum($arr1) == array_sum($arr2)) {
			return true;
		} else {
			return false;
		}
	}

	class ResultT4 {

		public $easy;
		public $hard;
		public $winner;
	}

	function hard($n) {
		$arr = [substr($n, 0, 1), substr($n, 1, 1), substr($n, 2, 1), substr($n, 3, 1), substr($n, 4, 1), substr($n, 5, 1)];
		$odd = [];
		$even = [];
		for($i = 0; $i < count($arr); $i++) {
			if($arr[$i] % 2 == 0) {
				array_push($even, $arr[$i]);
			} else {
				array_push($odd, $arr[$i]);
			}
		}

		if(array_sum($odd) == array_sum($even)) {
			return true;
		} else {
			return false;
		}
	}

	function equalizeMethods(ContextT4 $c) {
		if(strlen($c->max) > 6) {
			echo "max number is too long";
			die;
		}

		if(strlen($c->min) < 6) {
			while (strlen($c->min)!=6) {
				$c->min = 0 . $c->min;
			}
		}

		if(strlen($c->max) < 6) {
			while (strlen($c->max)!=6) {
				$c->max = 0 . $c->max;
			}
		}
		$easy = 0;
		$hard = 0;
		$winner = new ResultT4();
		for($i = $c->min; $i <= $c->max; $i++) {
			if(easy($i)) {
				$winner->easy = $easy++;
			}
			if(hard($i)) {
				$winner->hard = $hard++;
			}
		}
		if($winner->easy > $winner->hard) {
			$winner->winner = "Easy method wins";
		} else {
			$winner->winner = "Hard method wins";
		}
		return $winner;
	}

?>