<?php

	class Triangle {

		public $vertices;
		public $a;
		public $b;
		public $c;

		function __construct($vertices, $a, $b, $c) {

			$this->vertices = $vertices;
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;

		}

	}

	function geron($arr) {

		$tmp =[];

		for($i = 0; $i < count($arr); $i++) {
			if (($arr[$i]->a > 0) && ($arr[$i]->b > 0) && ($arr[$i]->c > 0) && (($arr[$i]->a < ($arr[$i]->b + $arr[$i]->c) && ($arr[$i]->b < ($arr[$i]->a + $arr[$i]->c) && ($arr[$i]->c < ($arr[$i]->a + $arr[$i]->b)))))) {

			    $p = ($arr[$i]->a + $arr[$i]->b + $arr[$i]->c) / 2;
			    $g = sqrt($p * ($p - $arr[$i]->a) * ($p - $arr[$i]->b) * ($p - $arr[$i]->c));
			    array_push($tmp, $arr[$i]=$g);
			} else {
				return "Error!";
			}
		}

		arsort($tmp);

		return $tmp;

	}

?>