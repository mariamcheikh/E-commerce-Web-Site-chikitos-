<?php

include_once ("configProduit.php");
include_once ("Rating.php");
class crudRating{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertRating($com,$conn){
		$req1="INSERT INTO rating (user_id, idproduit, rating) 
		VALUES ('".$com->getuser_id()."','".$com->getidproduit()."','".$com->getrating()."')";
		$conn->query($req1);
		
		$req2="INSERT INTO users (user_id) 
		VALUES ('".$com->getUser_id()."')";
		$conn->query($req2);
		
		$req3="INSERT INTO produit (idproduit) 
		VALUES ('".$com->getidproduit()."')";
		$conn->query($req3);
		
	    }
	
	
	function afficheRating($conn){
	$req="SELECT * FROM rating";
		$liste=$conn->query($req);
		return $liste->fetchAll();
		
		
		$req2="SELECT * FROM users";
		$liste=$conn->query($req2);
		return $liste->fetchAll();
		
		$req3="SELECT * FROM produit";
		$liste=$conn->query($req3);
		return $liste->fetchAll();
	 }
	 
 
	 
	function supprimerRating($user_id,$conn){
		$req2="DELETE  FROM rating where user_id='".$user_id."'";
		$conn->exec($req2);
		
		$req3="DELETE  FROM users where user_id='".$user_id."'";
		$conn->exec($req3);
		
		$req4="DELETE  FROM produit where idproduit='".$idproduit."'";
		$conn->exec($req4);
	}
	
	function recupererRating($user_id,$conn){
		
	$req="SELECT user_id,idproduit,rating FROM rating WHERE user_id='".$user_id."'";
		$com=$conn->query($req);
		
		return $com->fetchAll();
		
		$req1="SELECT user_id FROM users WHERE user_id='".$user_id."'";
		$com=$conn->query($req1);
		
		return $com->fetchAll();
		
		$req2="SELECT idproduit FROM produit WHERE id_produit='".$idproduit."'";
		$com=$conn->query($req2);
		
		return $com->fetchAll();
	}
	
	function modifierRating($com,$conn){
		
		$req1="UPDATE rating SET rating='".$com->getrating()."' WHERE user_id='".$com->getUser_id()."'";
		$conn->exec($req1);
		
		$req2="UPDATE users SET * WHERE user_id='".$com->getUser_id()."'";
		$conn->exec($req2);
		
		$req3="UPDATE produit SET * WHERE idproduit='".$com->getidproduit()."'";
		$conn->exec($req3);
		
	}

	
	function rechercherRating($user_id,$conn){
		
		$req="SELECT rating FROM rating where user_id='".$user_id."'";
		$liste=$conn->query($req);
		
		return ($liste->fetchAll());
	}
}

?>