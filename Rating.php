<?php
class Rating{
	//attributs
	private $user_id;
	private $idproduit;
	private $rating;
	
	
	
	//constructeur
	function __construct($user_id, $idproduit, $rating){
		$this->user_id=$user_id;
		$this->idproduit=$idproduit;
		$this->rating=$rating;
		
		
	}
		function getuser_id(){
		return $this->user_id;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	
	
	function getrating(){
		return $this->rating;
	}

	
}
?>