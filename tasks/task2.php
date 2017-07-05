<?php
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

	function letter(Letter $l1, Letter $l2) {
		if($l1->a < $l2->a && $l1->b < $l2->b) {
			return 1;
		} else if($l2->a < $l1->a && $l2->b < $l1->b) {
			return 2;
		} else {
			return 0;
		}
	}
