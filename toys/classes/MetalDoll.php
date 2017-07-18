<?php
require_once 'Doll.php';

class MetalDoll extends Doll
{
	public function getClassName()
	{
		return get_class($this);
	}
}