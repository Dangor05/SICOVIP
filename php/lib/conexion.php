<?php
/*
$host="localhost";
$user="root";
$password="12345";
$db="sicovip";
$con = new mysqli($host,$user,$password,$db);
*/

/**
* 
*/
require ("conf.php");
class conexion{
	private $con;
	
	public function __construct()
	{
		$this->con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}

	public function get_connection(){
		return $this->con;
	}
}
?>