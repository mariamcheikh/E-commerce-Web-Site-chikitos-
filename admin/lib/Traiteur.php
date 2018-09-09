<?php
class traiteur {
	private $Id_tra;
	private $Cin;
	private $Nom;
	private $Prenom;
	private $Adresse;
	private $Num_tele;
	private $Age;
	private $Diplome;
	private $Email;
	private $salaire_plats;
	private $etat;
	function __construct(){
    $Id_tra=0;
	$Cin=0;
	$Nom="";
	$Prenom="";
	$Adresse="";
	$Num_tele=0;
	$Age=0;
	$Diplome="";
	$Email="";
	$salaire_plats=0;
	}
	function getId_tra(){
		return $this->Id_tra;
	}
	function getCin(){
		return $this->Cin;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getNum_tele(){
		return $this->Num_tele;
	}
	function getAge(){
		return $this->Age;
	}
	function getDiplome(){
		return $this->Diplome;
	}
	function getEmail(){
		return $this->Email;
	}
	function getsalaire_plats(){
		return $this->salaire_plats;
	}
	function getEtat(){
		return $this->etat;
	}
	function setId_tra($Id_tra) {
		$this->Id_tra=$Id_tra;
	}
	function setCin($Cin) {
		$this->Cin=$Cin;
	}
	function setNom($Nom) {
		$this->Nom=$Nom;
	}
	function setPrenom($Prenom) {
		$this->Prenom=$Prenom;
	}
	function setAdresse($Adresse) {
		$this->Adresse=$Adresse;
	}
	function setNum_tele($Num_tele) {
		$this->Num_tele=$Num_tele;
	}
	function setAge($Age) {
		$this->Age=$Age;
	}
	function setDiplome($Diplome) {
		$this->Diplome=$Diplome;
	}
	function setEmail($Email) {
		$this->Email=$Email;
	}
	function setsalaire_plats($salaire_plats) {
		$this->salaire_plats=$salaire_plats;
	}
	function setEtat($salaire_plats) {
		$this->etat=$etat;
	}
}
?>
