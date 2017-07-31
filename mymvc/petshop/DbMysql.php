<?php
class DbMysql
{	
	public $myPDO;
	public function __construct($host, $dbname, $user, $pass)
	{
		$this->myPDO = new PDO('mysql:host=' . $host . ';' . 'dbname=' . $dbname, $user, $pass);
	}
}