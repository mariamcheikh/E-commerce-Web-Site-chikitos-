<?php
class Commentaires{
	//attributs
	private $user_id;
	private $idproduit;
	private $description;
	
	
	
	//constructeur
	function __construct($user_id, $idproduit, $description){
		$this->user_id=$user_id;
		$this->idproduit=$idproduit;
		$this->description=$description;
		
		
	}
		function getuser_id(){
		return $this->user_id;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	
	
	function getdescription(){
		return $this->description;
	}

	
}
?>