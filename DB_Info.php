<?php

class DBase_Connection
{
	private $host;
	private $user;
	private $pwd;
	private $dbname;
	private $link;
	private $DBase;
	
	public function __construct() // Constructeur
	{
		$this->host="localhost";
		$this->user="root";
		$this->pwd="";
		$this->dbname="pfc_1314";
		//$this->link=mysql_connect($this->host, $this->user, $this->pwd);
		$this->link=mysqli_connect($this->host, $this->user, $this->pwd);
		  if(!$this->link)
		  {
			echo 'Erreur de connexion au serveur de base de données!!!';
		  }
		$this->DBase = mysqli_select_db($this->link,$this->dbname);
		  if (!$this->DBase)
		  {
			echo 'Erreur de connexion à la base de donnees!!!';
		  }
    }
	
	public function DB_Connection() //DataBase connection
	{
		if ($this->DBase && $this->link){
				//mysqli_query($this->link,"UTF8");
			mysqli_set_charset($this->link, "utf8"); //Sets the default client character set to Utf8
				return true;
		}
		else
			return false;
	}
	
	public function DB_Disconnection() //DataBase disconnection
	{
		mysqli_close();
	}
	
	public function __destruct() {} //Destructeur 
	
}
//...Set Connection to DataBase...//
$DB_cnx = new DBase_Connection();
$DB_cnx->DB_Connection();
//...............................//
?>