<?php
class table {
	private $Id_table;
	private $Numero_table;
	private $Etat_table;
	function __construct(){
	$Id_table=0;
	$Numero_table=0;
	$Etat_table="";
	}
    function getId_table(){
		return $this->Id_table;
	}
	function getNumero_table(){
		return $this->Numero_table;
	}
	function getEtat_table(){
		return $this->Etat_table;
	}
	function setId_table($Id_table) {
		$this->Id_table=$Id_table;
	}
	function setNumero_table($Numero_table) {
		$this->Numero_table=$Numero_table;
	}
	function setEmail($Etat_table) {
		$this->Etat_table=$Etat_table;
	}
}
?>
