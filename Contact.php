<?php
class Contact{
	//attributs
    private $id_contact;
	private $nom;
	private $telephone;
	private $mail;
	private $message;
	
	//constructeur
	function __construct($nom,$telephone,$mail,$message){
	
		$this->nom=$nom;
		$this->telephone=$telephone;
		$this->mail=$mail;
		$this->message=$message;
		
	}
	function getNom(){
		return $this->nom;
	}
	function getTelephone(){
		return $this->telephone;
	}
	function getMail(){
		return $this->mail;
	}
	function getMessage(){
		return $this->message;
	}
	
}
?>