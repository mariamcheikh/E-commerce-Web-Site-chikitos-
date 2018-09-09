<?php

include_once ("configProduit.php");
include_once ("Commentaires.php");
class crudCommentaires{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertCommentaires($com,$conn){
		$req1="INSERT INTO commentaires (user_id, idproduit, description) 
		VALUES ('".$com->getuser_id()."','".$com->getidproduit()."','".$com->getdescription()."')";
		$conn->query($req1);
		
		$req2="INSERT INTO users (user_id) 
		VALUES ('".$com->getUser_id()."')";
		$conn->query($req2);
		
		$req3="INSERT INTO produit (idproduit) 
		VALUES ('".$com->getidproduit()."')";
		$conn->query($req3);
		
	    }
	
	
	function afficheCommentaires($conn){
	$req="SELECT * FROM commentaires";
		$liste=$conn->query($req);
		return $liste->fetchAll();
		
		
		$req2="SELECT * FROM users";
		$liste=$conn->query($req2);
		return $liste->fetchAll();
		
		$req3="SELECT * FROM produit";
		$liste=$conn->query($req3);
		return $liste->fetchAll();
	 }
	 
	  /*function affichecommentaires1($com,$conn){
		$req1="SELECT user_id=".$com->getuser_id()." from commentaires WHERE id_user='".$com->getuser_id()."'";
		 	$list=$conn->query($req1);
		$req2="SELECT user_id=".$com->getuser_id()." from users WHERE id_user='".$com->getuser_id()."'";
		  	$list=$conn->query($req2);
		$req3="SELECT id_produit=".$com->getid_produit()." from produits WHERE id_produit='".$com->getid_produit()."'";
		    $list=$conn->query($req3);
		return  $list->fetchAll();
	 }*/
	 
	 
	function supprimerCommentaires($user_id,$conn){
		$req2="DELETE  FROM commentaires where user_id='".$user_id."'";
		$conn->exec($req2);
		
		$req3="DELETE  FROM users where user_id='".$user_id."'";
		$conn->exec($req3);
		
		$req4="DELETE  FROM produit where idproduit='".$idproduit."'";
		$conn->exec($req4);
	}
	
	function recupererCommentaires($user_id,$conn){
		
	$req="SELECT user_id,idproduit,description FROM commentaires WHERE user_id='".$user_id."'";
		$com=$conn->query($req);
		
		return $com->fetchAll();
		
		$req1="SELECT user_id FROM users WHERE user_id='".$user_id."'";
		$com=$conn->query($req1);
		
		return $com->fetchAll();
		
		$req2="SELECT idproduit FROM produit WHERE id_produit='".$idproduit."'";
		$com=$conn->query($req2);
		
		return $com->fetchAll();
	}
	
	function modifierCommentaires($com,$conn){
		
		$req1="UPDATE commentaires SET description='".$com->getdescription()."' WHERE user_id='".$com->getUser_id()."'";
		$conn->exec($req1);
		
		$req2="UPDATE users SET * WHERE user_id='".$com->getUser_id()."'";
		$conn->exec($req2);
		
		$req3="UPDATE produit SET * WHERE idproduit='".$com->getidproduit()."'";
		$conn->exec($req3);
		
	}

	
	function rechercherCommentaires($user_id,$conn){
		
		$req="SELECT description FROM commentaires where user_id='".$user_id."'";
		$liste=$conn->query($req);
		
		return ($liste->fetchAll());
	}
}

?>