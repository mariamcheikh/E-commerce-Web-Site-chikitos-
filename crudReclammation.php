
<?php

include ("configReclammation.php");
include ("Reclammation_class.php");
class crudReclammation{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertReclammation($rect,$conn){
		
		$req1="INSERT INTO reclammations (messageR,etat,user_id) 
		VALUES ('".$rect->getMessageR()."','".$rect->getEtat()."','$_SESSION[user_session]')";
		$conn->query($req1);
		
		//$req2="INSERT INTO users (user_id) 
		//VALUES ('".$rect->getUser_id()."')";
		//$conn->query($req2);
		
        }
	
	function afficheReclammation($conn){
	$req="SELECT * FROM reclammations";
		$liste=$conn->query($req);
		return $liste->fetchAll();
		
		$req2="SELECT * FROM users";
		$liste=$conn->query($req2);
		return $liste->fetchAll();
		
		
	}
	function supprimerReclammation($id_reclammation,$conn){
		
	$req2="DELETE  FROM reclammations where id_reclammation='".$id_reclammation."'";
		$conn->exec($req2);
		$req3="DELETE  FROM users where id_reclammation='".$id_reclammation."'";
		$conn->exec($req3);
	}
	function rechercherReclammation($etat,$conn){
		$req="SELECT messageR,user_id FROM reclammations where etat='".$etat."'";
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	
	function recupererReclammation($id_reclammation,$conn){
		
		$req="SELECT * FROM reclammations WHERE id_reclammation='".$id_reclammation."'";
		$cont=$conn->query($req);
		return $cont->fetchAll();
		$req1="SELECT user_id FROM users WHERE id_reclammation='".$id_reclammation."'";
		$cont=$conn->query($req1);
		return $cont->fetchAll();
		
	}
	
	function modifierReclammation($rect,$conn,$id_reclammation){
		$req1="UPDATE reclammations SET etat='".$rect->getEtat()."' WHERE id_reclammation='".$id_reclammation."'";
		$conn->exec($req1);
	
	}
	function calcul_statistique_etat($conn)

     {
        $req="SELECT count(*) FROM reclammations WHERE etat='etat'";
		$result = $conn->query($req)->fetch();
         return $result;
     }
	 /*function calcul_statistique_etat_traite($conn)

     {
        $req="SELECT count(*) FROM produit WHERE etat='traite'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }
	 
	 function calcul_statistique_etat_en_attente($conn)

     {
        $req="SELECT count(*) FROM produit WHERE etat='en attente'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }*/
	function calcul_statistique_10($conn)

     {
        $req="SELECT count(*) FROM reclammations WHERE etat='traite'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }
function calcul_statistique_30($conn)
     {
        $req="SELECT count(*) FROM reclammations WHERE etat='En attente'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }

		
	
}

?>