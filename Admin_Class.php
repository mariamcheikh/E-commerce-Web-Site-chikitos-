<?php  

class Admin 
{
	private $adminID;
	private $firstname;
	private $lastname;
	private $email;
	private $pwd;


	function __construct()
	{
	 $adminID=0;
	 $firstname="";
	 $lastname="";
	 $email="";
	 $pwd="";

	}

	/****GET/SET Function****/
		function set_adminID($adminID)
	{
		$this->adminID=$adminID;
	}
		function set_firstname($firstname)
	{
		$this->firstname=$firstname;
	}


		function set_lastname($lastname)
	{
		$this->lastname=$lastname;
	}

		function set_email($email)
	{
		$this->email=$email;
	}


		function set_pwd($pwd)
	{
		$this->pwd=$pwd;
	}

	/******Functions******/

public function admin_login($DB)
	{
	   $req=$DB->prepare("SELECT * FROM `admin` WHERE `email`=? ");
	   $req->bindParam(1,$this->email);
	   $req->execute();
	   	   while ($Row = $req->fetch())
    {
    	if ($Row['password']==$this->pwd) {
    		$_SESSION['admin_session']=$Row['admin_id'];
    		$_SESSION['admin_name']=$Row['firstname'];
    		return true;
    	}else{
    		return false;
    	}
    }

	}

	//End Function
	
	public function admin_logout()
	{
		session_start();
 		unset($_SESSION['admin_session']);
 		unset($_SESSION['admin_name']);
 
		 if(session_destroy())
		 {
		  header("Location:/ProjetPFCIntegration/AdminLogin.php");
		 }
	}
}


?>