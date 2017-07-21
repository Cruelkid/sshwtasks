<?php
trait FluffyPet
{
	public function isFluffy()
	{
		return $this->fluff > 3;
	}
}