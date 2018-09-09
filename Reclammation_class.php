<?php
class Reclammations{
	//attributs
	private $id_reclammation;
	private $user_id;
	private $etat;
	private $messageR;

	
	//constructeur
	function __construct($messageR,$etat){
		$this->messageR=$messageR;
		$this->etat=$etat;
		
		//$this->user_id=$user_id;

		}
	
	function getReclammations(){
		return $this->id_reclammation;
	}
	function getUser_id(){
		return $this->user_id;
	}
	function getEtat(){
		return $this->etat;
	}
	function getMessageR(){
		return $this->messageR;
	}
	
}
?>