<?php
class Produit{
	//attributs
	//private $id_produit;
	private $taille;
	private $nom;
	private $description;
	private $image;
	private $prixproduit;
	private $categorie;

	
	//constructeur
	function __construct($taille,$nom,$description,$image,$prixproduit,$categorie){
		//$this->id_produit=$id_produit;
		$this->taille=$taille;
		$this->nom=$nom;
		$this->description=$description;
		$this->image=$image;
		$this->prixproduit=$prixproduit;
		$this->categorie=$categorie;
	
		
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function gettaille(){
		return $this->taille;
	}
	function getnom(){
		return $this->nom;
	}
	function getdescription(){
		return $this->description;
	}
	function getimage(){
		return $this->image;
	}
	function getprixproduit(){
		return $this->prixproduit;
	}
	function getcategorie(){
		return $this->categorie;
	}
	
	
}
?>