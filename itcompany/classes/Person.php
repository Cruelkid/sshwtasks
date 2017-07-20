<?php
require_once 'classes/ITcompany.php';

abstract class Person
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}