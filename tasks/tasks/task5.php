<?php
require_once 'Task.php';
class ContextT5
{
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

class ResultT5 extends Task
{
	public $context;

	function __construct(ContextT5 $c) {
		$this->context = $c;
	}

	function counter() {
		$res = [];

		if(!is_null($this->context->length)) {
			$x = 0;
			$y = 1;
			for($i = 0; $i < 100; $i++) {
				$z = $x + $y;
				if(strlen($z) == $this->context->length) {
					$res[] = $z;
				}
				$x = $y;
				$y = $z;
			}
		} else {
			$x = 0;
			$y = 1;
			for($i = 0; $i <= $this->context->max; $i++) {
				$z = $x + $y;
				if($z > $this->context->max) break;
				if($z >= $this->context->min) {
					$res[] = $z;
				}
				$x = $y;
				$y = $z;
			}
		}
		return implode(", ", $res);
	}

	function isValid() {
		if (!empty($this->context->length)) {
			if ($this->context->length > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			if ($this->context->min > 0 && $this->context->max > 0) {
				return true;
			} else {
				return false;
			}
		}
	}

	function validate() {
		if ($this->isValid()) {
			return true;
		} else {
			throw new Exception("Invalid input", 1);
		}
	}

	function run() {
		echo $this->counter();
	}

}
