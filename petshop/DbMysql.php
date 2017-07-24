<?php
class DbMysql
{	
	public $myPDO;
	public function __construct()
	{
		$this->myPDO = new PDO('mysql:host=localhost;dbname=petshop', 'root', '');
	}
}