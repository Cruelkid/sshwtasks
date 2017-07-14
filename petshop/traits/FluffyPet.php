<?php
trait FluffyPet
{
	public function isFluffy()
	{
		return $this->fluff > 3;
		// if ($this->fluff > 3) {
		// 	return true;
		// } else {
		// 	return false;
		// }
	}
}