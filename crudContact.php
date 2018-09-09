<?php

include ("configContact.php");
include ("Contact.php");
class crudContact{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertContact($cont,$conn){
		$req1="INSERT INTO contact(nom,telephone,mail,message) 
		VALUES ('".$cont->getNom()."','".$cont->getTelephone()."','".$cont->getMail()."','".$cont->getMessage()."')";
		$conn->query($req1);
	    }
	
	function afficheContact($conn){
		$req="SELECT * FROM contact ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	 }
	 
	function supprimerContact($id_contact,$conn){
		$req2="DELETE  FROM contact where id_contact='".$id_contact."'";
		$conn->exec($req2);
	}
	
	function rechercherContact($nom,$conn){
		$req="SELECT telephone,mail,message FROM contact where nom='".$nom."'";
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	function rechercherContactparmail($mail,$conn){
		$req="SELECT nom,telephone,message FROM contact where mail='".$mail."'";
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	function dy_search($nom,$conn)
	{
		
		$req="SELECT nom FROM contact where nom like '%$nom%' ";

		$liste=$conn->query($req);
		return ($liste->fetchAll());
		
		
	}
	function dy_search_mail($nom,$conn)
	{
		$req="SELECT mail FROM contact where mail like '%$nom%' ";

		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	
	
}

?>