<?php
trait FluffyPetTrait

{
	public function isFluffy()
	{
		return $this->fluff > 3;
	}
}