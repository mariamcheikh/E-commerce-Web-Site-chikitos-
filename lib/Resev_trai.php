<?php
class reserv_trait {
	private $Id_tra;
	private $Id_client;
	private $Date_reserv;
	private $Prix_reserv;
    private $periode;
	function __construct(){
	$Id_tra=0;
	$Id_client=0;
	$Date_reserv="";
	$Prix_reserv=0;
        $periode=0;
	}
	function getId_tra(){
		return $this->Id_tra;
	}
        function getPeriode(){
		return $this->periode;
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
	function setId_tra($Id_tra) {
		$this->Id_tra=$Id_tra;
	}
        function setPeriode($periode) {
		$this->periode=$periode;
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
}
?>
