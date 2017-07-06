<?php
require_once "Task.php";
class Triangle
{
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

class TriangleSort extends Task
{
	public $triangles = [];

	function __construct() {
		$arguments = func_get_args();
		foreach ($arguments as $arg) {
			array_push($this->triangles, $arg);
		}
	}

	function geron() {
		$tmp = [];

		for($i = 0; $i < count($this->triangles); $i++) {
		    $p = ($this->triangles[$i]->a + $this->triangles[$i]->b + $this->triangles[$i]->c) / 2;
		    $g = sqrt($p * ($p - $this->triangles[$i]->a) * ($p - $this->triangles[$i]->b) * ($p - $this->triangles[$i]->c));
		    array_push($tmp, $this->triangles[$i]=$g);
		}
		arsort($tmp);
		return implode(", ", $tmp);
	}

	function isValid(Triangle $t) {
		if (($t->a > 0) && ($t->b > 0) && ($t->c > 0) && (($t->a < ($t->b + $t->c) && ($t->b < ($t->a + $t->c) && ($t->c < ($t->a + $t->b)))))) {
			return true;
		} else {
			return false;
		}
	}

	function validate() {
		foreach ($this->triangles as $t) {
			if ($this->isValid($t)) {
				return true;
			} else {
				throw new Exception("Triangle " . $t->vertices . " doesn't exist!", 1);
			}
		}
	}

	function run() {
		echo $this->geron();
	}

}

