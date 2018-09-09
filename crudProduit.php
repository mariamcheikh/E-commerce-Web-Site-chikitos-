<?php

include_once ("configProduit.php");
include_once("Produit.php");
class crudProduit{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertProduit($prod,$conn){
		$req1="INSERT INTO produit (taille,nom,description,image,prixproduit,categorie) 
		VALUES ('".$prod->gettaille()."','".$prod->getnom()."','".$prod->getdescription()."','".$prod->getimage()."','".$prod->getprixproduit()."','".$prod->getcategorie()."')";
		$conn->query($req1);
	    }
		
	
function displayimage($image)
            {
               
                $req="SELECT * FROM produit WHERE image=".$image."";
                $res=$conn->query($req);
                while($row = $res->fetch())
                {
                    echo '<img height="300" width="300" src="data:image;base64,'.$row[2].' "> ';
                }
                
			}
                
	function SearchLastImage($conn)
{
	$req="SELECT * FROM produit ORDER BY image DESC LIMIT 1";
		$liste=$conn->query($req);
	    return $liste->fetchAll();    

}
	
	
	function afficheProduit($conn){
		$req="SELECT * FROM produit ";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	 }
	 
	 function afficheProduit1($prod,$conn){
		 $req1="SELECT taille=".$prod->gettaille().",description='".$prod->getdescription()."',image='".$prod->getimage()."',prixproduit=".$prod->getprixproduit().",categorie='".$prod->getcategorie()."'  from produit WHERE nom='".$prod->getnom()."'";
		$list=$conn->query($req1);
		return  $list->fetchAll();
	 }
	 
	 
	 
	 
	function supprimerProduit($nom,$conn){
		$req2="DELETE  FROM produit where nom='".$nom."'";
		$conn->exec($req2);
	}
	
	function recupererProduit($nom,$conn){
		
		$req="SELECT taille,nom,description,image,prixproduit,categorie FROM produit  WHERE nom='".$nom."'";
		$cont=$conn->query($req);
		return $cont->fetchAll();
	}
	
	function modifierProduit($prod,$conn){
		$req1="UPDATE produit SET taille='".$prod->gettaille()."',description='".$prod->getdescription()."',image='".$prod->getimage()."',prixproduit=".$prod->getprixproduit().",categorie='".$prod->getcategorie()."' WHERE nom='".$prod->getnom()."'";
		$conn->query($req1);
		$err=$conn->errorInfo();

		var_dump($err);
	}

	
	function rechercherProduit($nom,$conn){
		$req="SELECT taille,nom,description,image,prixproduit,categorie FROM produit where nom='".$nom."'";
		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	function dy_search($nom,$conn)
	{
		
		$req="SELECT nom FROM produit where nom like '%$nom%' ";

		$liste=$conn->query($req);
		return ($liste->fetchAll());
		
		
	}
	function dy_search_categorie($nom,$conn)
	{
		$req="SELECT categorie FROM produit where categorie like '%$nom%' ";

		$liste=$conn->query($req);
		return ($liste->fetchAll());
	}
	
	function calcul_statistique_pizza($conn)

     {
        $req="SELECT count(*) FROM produit WHERE categorie='pizza'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }
	
	
function calcul_statistique_plats($conn)

     {
        $req="SELECT count(*) FROM produit WHERE categorie='plats'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }
	 function calcul_statistique_baguette_farcie($conn)

     {
        $req="SELECT count(*) FROM produit WHERE categorie='Baguette Farcie'";
		
        $result = $conn->query($req)->fetch();
         return $result;
     }
     function affiche2($conn)
     {
     	$req="SELECT nom,prixproduit FROM produit";
		$liste=$conn->query($req);
		return $liste->fetchAll();   }
	
}

?>