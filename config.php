<?php

class DBase_Connection
{
	function PDO_DBconnc()
	{
		$this->host="localhost";
		$this->user="root";
		$this->pwd="";
		$this->dbname="projetweb";	
		$conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pwd);
		return($conn);
	}
}

?>