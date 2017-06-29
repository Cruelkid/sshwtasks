<?php

	class ContextT5 {

		public $min;
		public $max;
		public $length;

		function __construct() {

			$arguments = func_get_args();
	        $num = sizeof($arguments);
	        switch($num) {
	            case 0;
            		break;
            	case 1:
					$this->length = $arguments[0];
            		break;
				case 2:
					$this->min = $arguments[0];
					$this->max = $arguments[1];
					break;
				default:
					break;
				}

		}

	}

	function counter(ContextT5 $c) {

		$res = [];

		if(!is_null($c->length)) {
			$x = 0;
			$y = 1;
			for($i = 0; $i < 100; $i++) {
				$z = $x + $y;
				if(strlen($z) == $c->length) {
					array_push($res, $z);
					// $res = $res . $z."<br/>";
				}
				$x = $y;
				$y = $z;
			}
		} else {
			$x = 0;
			$y = 1;
			for($i = 0; $i <= $c->max; $i++) {
				$z = $x + $y;
				if($z > $c->max) break;
				if($z >= $c->min) {
					array_push($res, $z);
					// $res = $res . $z."<br/>";
				}
				$x = $y;
				$y = $z;
			}
		}

		return $res;

	}

?>