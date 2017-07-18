<?php
require_once 'Doll.php';

class WoodenDoll extends Doll
{
	public function getClassName()
	{
		return get_class($this);
	}
}