<?php
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

function createChess(Chessboard $c) {
	
	$res = '';
	
	if($c->width < 0 || $c->height < 0 || $c->symbol == ' ') throw new Exception("Invalid input", 1);
	for($i = 0; $i < $c->height; $i++) {
		for ($j = 0; $j < $c->width; $j++) { 
			if($i % 2 == 0) {
				$res .= $c->symbol."&nbsp";
			} else {
				$res .= "&nbsp".$c->symbol;
			}
		}
			$res .= "</br>";
	}

	return $res;

}
