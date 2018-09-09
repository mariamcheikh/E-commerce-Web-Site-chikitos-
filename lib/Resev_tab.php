<?php

class reser_tab {
	private $Id_table;
	private $Id_client;
	private $Date_reserv;
	private $Prix_reserv;
	private $Nbr_pers;
	function __construct(){
	$Id_table=0;
	$Id_client=0;
	$Date_reserv="";
	$Prix_reserv=0;
	$Nbr_pers=0;
	}
	function getId_table(){
		return $this->Id_table;
	}
	function getId_client(){
		return $this->Id_client;
	}
	function getDate_reserv(){
		return $this->Date_reserv;
	}
	function getPrix_reserv(){
		return $this->Prix_reserv;
	}
	function getNbr_pers(){
		return $this->Nbr_pers;
	}
	function setId_table($Id_table) {
		$this->Id_table=$Id_table;
	}
	function setId_client($Id_client) {
		$this->Id_client=$Id_client;
	}
	function setDate_reserv($Date_reserv) {
		$this->Date_reserv=$Date_reserv;
	}
	function setPrix_reserv($Prix_reserv) {
		$this->Prix_reserv=$Prix_reserv;
	}
	function setNbr_pers($Nbr_pers) {
		$this->Nbr_pers=$Nbr_pers;
	}
}
?>