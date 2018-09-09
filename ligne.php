<?php
class ligne{
	private $idpannier;
	private $idproduit;
	private $quantite;
	

	function __construct($idpannier,$idproduit,$quantite){
		
		$this->idpannier=$idpannier;
		$this->idproduit=$idproduit;
		$this->quantite=$quantite;
		}
	function getidpannier(){
		return $this->idpannier;	
	}
	function getidproduit(){
		return $this->idproduit;	
	}
	function getquantite(){
		return $this->quantite;	
	}

	function setquantite($qte){
		$this->quantite=$qte;
	}
	function getprixproduit($id){
		$req="SELECT p.prixproduit FROM ligne l join produit p on l.idproduit=p.idproduit w here idproduit='".$id."'";
    $DB->query($req);
	}

	function supprimerligne($DB,$id){
		$req="DELETE FROM ligne where idproduit=".$id."";
	$stmt = $DB->prepare($req);
	$stmt->execute();
	}
	function ajouter($DB,$idcl,$idpr){
		$req="INSERT INTO ligne (idpannier,idproduit,quantite) VALUES ((SELECT MAX(idcommande) FROM commande where user_id=".$idcl."),'".$idpr."',1)";
    	$stmt = $DB->query($req);
	}
	function setquantitebase($DB,$qu,$idp){
		$req1=$DB->prepare("UPDATE ligne SET quantite=".$qu." WHERE idproduit=".$idp."");
		$req1->execute();
	}
	function rechercherligne($DB,$idp){
		$req="SELECT idproduit FROM ligne where idproduit='".$idp."'";
		$liste=$DB->query($req);
		return ($liste->fetchall());
	}
	function searchdy($DB,$idp)
	{
		$req= $DB->prepare("SELECT p.nom FROM ligne l INNER JOIN produit p on l.idproduit=p.idproduit where l.idpannier=(select MAX(l.idpannier) from ligne) AND l.idproduit like '%$idp%'");
		
		$req->execute();	
   		return $req->fetchAll();
    }
    function searchmulti($DB,$prix)
    {
    	$req=$DB->prepare("SELECT p.prixproduit FROM ligne l INNER JOIN produit p on l.idproduit=p.idproduit where l.idpannier=(select MAX(l.idpannier) from ligne)  AND p.prixproduit like '%$prix%'");
    	$req->execute();
    	return $req->fetchAll();
    }
    function ajouterquantite($DB,$idpr)
    {
    	$req1=$DB->prepare("UPDATE ligne SET quantite=quantite+1 WHERE idproduit=".$idpr."");
		$req1->execute();
    }
}
?>