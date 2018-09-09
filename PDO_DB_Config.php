<?php  

class DBase_Connection
{
	
	private $host;
	private $user;
	private $pwd;
	private $dbname;
	private $DBase;
	
	 //-------------------------------------------------------------------------
    // Constructor
    //-------------------------------------------------------------------------

	function __construct()
	{
		$this->host="localhost";
		$this->user="root";
		$this->pwd="";
		$this->dbname="ProjetWeb";
	}

	 //-------------------------------------------------------------------------
    // Establish connection
    //-------------------------------------------------------------------------

	function DB_Connection() 
	{
		try {  
      $this->DBase = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pwd);  
      $this->DBase->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  // Configure PDO attributes "PDO::ATTR_ERRMODE" Causes an exception to be thrown

        return $this->DBase;
    }
    catch(PDOException $error) {  

     echo 'ERROR: ' . $error->getMessage();
    }   
	}

}


?>
