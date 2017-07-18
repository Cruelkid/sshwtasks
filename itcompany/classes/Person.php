<?php
require_once 'classes/ITcompany.php';

abstract class Person extends ITcompany
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}