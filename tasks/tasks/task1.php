<?php
require_once "Task.php";
class Chessboard
{
	public $width;
	public $height;
	public $symbol;

	public function __construct($width, $height, $symbol) {
		$this->width = $width;
		$this->height = $height;
		$this->symbol = $symbol;
	}

}


class generateChessboard extends Task
{
	public $chess;

	public function __construct(Chessboard $c) {
		$this->chess = $c;
	}

	private function createChess() {
		$res = '';
		
		for($i = 0; $i < $this->chess->height; $i++) {
			for ($j = 0; $j < $this->chess->width; $j++) { 
				if($i % 2 == 0) {
					$res .= $this->chess->symbol."&nbsp";
				} else {
					$res .= "&nbsp".$this->chess->symbol;
				}
			}
				$res .= "</br>";
		}

		return $res;
	}

	function isValid() {
		if (!($this->chess->width < 0 || $this->chess->height < 0 || $this->chess->symbol == ' ')) {
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
		echo $this->createChess();
	}

}

