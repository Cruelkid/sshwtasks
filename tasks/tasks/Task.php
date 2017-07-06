<?php
abstract class Task
{
	abstract protected function validate();
	abstract protected function run();
	public function resolveAsString() {
		if (!$this->validate()) throw new Exception("Data is not valid", 1);
		$this->run();
	}
}