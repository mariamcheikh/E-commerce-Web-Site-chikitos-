<?php
class commande{
	private $idcommande;
	private $idclient;
	private $datecommande;
	private $datelivraison;
	private $adresselivraison;
	private $modepaiement;
	private $etatlivraison;


	function __construct($idclient,$datecommande,$datelivraison,$adresselivraison,$modepaiement,$etatlivraison){
		
		$this->idclient=$idclient;
		$this->datecommande=$datecommande;
		$this->datelivraison=$datelivraison;
		$this->adresselivraison=$adresselivraison;
		$this->modepaiement=$modepaiement;
		$this->etatlivraison=$etatlivraison;

		}
	function getetatlivraison(){
		return $this->etatlivraison;	
	}
	function getidcommande(){
		return $this->idcommande;	
	}
	function getdatecommande(){
		return $this->datecommande;	
	}
	function getdatelivraison(){
		return $this->datelivraison;	
	}
	function getadresselivraison(){
		return $this->adresselivraison;	
	}
	function getmodepaiement(){
		return $this->modepaiement;	
	}

	function getnumberproduit($DB,$id){
		$req="SELECT COUNT(*) from ligne l INNER JOIN commande c on l.idpannier=c.idcommande INNER JOIN users cl on c.user_id=cl.user_id where c.idcommande=(SELECT MAX(c.idcommande) from commande c INNER JOIN users cl on c.user_id=cl.user_id where cl.user_id=".$id.")";
			$stmt = $DB->prepare($req);
		$stmt->execute();
		$row = $stmt->fetch();
		return $sum = $row['0'];
	}
	function calcultotal($DB,$id){
		$req=$DB->prepare("SELECT SUM(p.prixproduit*l.quantite) FROM ligne l inner join produit p on l.idproduit=p.idproduit WHERE l.idpannier=(SELECT MAX(c.idcommande) from commande c INNER JOIN users cl on c.user_id=cl.user_id where cl.user_id='".$id."')");
		$req->execute();
		$row = $req->fetch();
		return $total = $row['0'];
	}

	function recupercommande($DB,$id)
{

	$req="SELECT MAX(c.idcommande) FROM commande c INNER JOIN users cl on c.user_id=cl.user_id WHERE c.user_id=".$id."" ;
	$stmt = $DB->prepare($req);
    return $stmt->execute();
}
	function modifierlivraison($DB,$id){
$req=$DB->query('select * from commande ');
		while($xd=$req->fetch())
		{
			$idd=$xd[0];		
		}
		
$req1=$DB->prepare("UPDATE `commande` SET `adresselivraison`=?,`modepaiement`=?,`datelivrason`=? WHERE (idcommande=? AND user_id=".$id.")");
		$req1->bindParam(1,$this->adresselivraison);
		$req1->bindParam(2,$this->modepaiement);
		$req1->bindParam(3,$this->datelivraison);
		$req1->bindParam(4,$idd);
		
		$req1->execute();
	}

function affichercommande($DB,$id)
{

	$req="SELECT l.idproduit,l.quantite,p.prixproduit from commande c inner join ligne l on c.idcommande=l.idpannier inner join produit p on p.idproduit=l.idproduit INNER JOIN users cl on c.user_id=cl.user_id where cl.user_id=".$id."";
		$stmt = $DB->prepare($req);
	$stmt->execute();
    //$DB->query($req);
    while ($donnees = $stmt->fetch())
    {
     	?>
     

     		<tr style="background-color: white;">
     		     	
     		     	<td >
     		     	<form method="POST" action="supprimer.php">
     		     	<input type="submit" name="supp[]" value="supprimer" class="btn btn-danger">
     		     	<input type="text" name="champsupp" value="<?php echo $donnees[0];?>" hidden></input>
     		     	</form>
     		     	<br>
     		     	<form method="POST" action="okok.php">
     		     	<input type="submit" name="modif[]" value="modifier" class="btn btn-warning">
       		     	<input type="text" name="champmodif" value="<?php echo $donnees[0];?>" hidden></input>
					</form>
					<br>	
					</td>
     	<td ><?php echo $donnees[0];?> </td>
        
		<td class="invert">
			 <div class="quantity"> 
				<div class="quantity-select">   
				<form id="inc_form">                       
					<button type="button" style="width:40px; height:40px" onClick="decrease(<?php echo $donnees[0];?>)">-</button>
					<input id="<?php echo $donnees[0];?>" name="qty" type="text" style="width:40px; height:40px; text-align:center; background-color:#E0E0E0" value="<?php echo $donnees[1];?>" readonly >
					<button type="button" style="width:40px; height:40px" onClick="increase(<?php echo $donnees[0];?>)" value="<?php echo $donnees[0];?>">+</button>
					
				</form>

				</div>
			</div>

		</td>   	
		<td><?php echo $donnees[2];?> </td>
     	  	</tr>

     <?php

    }

}
 function fiche($DB,$idcom){
    	$req="SELECT l.idproduit,p.prixproduit FROM commande c inner join ligne l on c.idcommande=l.idpannier inner join produit p on p.idproduit=l.idproduit where MAX(idcommande)=$idcom";
			$stmt = $DB->prepare($req);
		$stmt->execute();
		return $stmt->fetchall();
    }
    function getbaseadresselivraison($DB,$id){
    	$req="SELECT c.adresselivraison From commande c INNER JOIN users cl on c.user_id=cl.user_id where (idcommande=(select MAX(idcommande) from commande)) AND c.user_id=".$id."";
			$stmt = $DB->prepare($req);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row['0'];
    }
     function getbasedatelivraison($DB,$id){
    	$req="SELECT datelivraison From commande where MAX(idcommande)=$id";
			$stmt = $DB->prepare($req);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row['0'];
    }
    function delete($DB,$id){
    	$req="DELETE * from commande WHERE idcommande=".$id."";
		$stmt = $DB->prepare($req);
		$stmt->execute();
	   return($stmt->fetchall());

    }
    function addcommande($DB,$id){
    	$req="INSERT INTO commande (datecommande,user_id,datelivrason,adresselivraison,modepaiement,etatlivraison) VALUES (CURRENT_DATE,'".$id."',CURRENT_DATE,'a la livraison','non livree')";
    	$stmt=$DB->prepare($req);
    	$stmt->execute();
    }
    function recherche_id_client($DB,$idcl)
    {
    	$req="SELECT user_id FROM commande where user_id=".$idcl."";
    	$stmt=$DB->prepare($req);
    	$stmt->execute();
    	$row=$stmt->fetch();
		return $row['0'];
    }
    function recherche_id_produit($DB,$id)
    {
    	$req=$DB->prepare("SELECT l.idproduit FROM commande c INNER JOIN ligne l on c.idcommande=l.idpannier where c.user_id=".$id."");
    	$req->execute();
    	return $req->fetchAll();
    }
    function nouvellecommande($DB,$id)
    {
    	//$req="INSERT INTO commande (datecommande,datelivrason,idclient,modepaiement) VALUES (CURRENT_DATE, CURRENT_DATE , '".$id."','à la livraison')";
       	
        $req="INSERT INTO `commande`( `datecommande`, `datelivrason`, `user_id`) VALUES (CURRENT_DATE,CURRENT_DATE,'".$this->idclient."')";
    	$stmt=$DB->prepare($req);
    	$stmt->execute();
    }
    function recuperercommande($idcommande,$DB){
		
		$req="SELECT * FROM commande WHERE idcommande='".$idcommande."'";
		$cont=$DB->query($req);
		return $cont->fetchAll();
		$req1="SELECT user_id FROM users WHERE idcommande='".$idcommande."'";
		$cont=$DB->query($req1);
		return $cont->fetchAll();
		
	}
	
	function modifiercommande($rect,$DB,$idcommande){
		$req1="UPDATE commande SET etatlivraison='".$rect->getetatlivraison()."' WHERE idcommande='".$idcommande."'";
		$DB->exec($req1);
	
	}
		function affichecommande($DB){
	$req="SELECT * FROM commande";
		$liste=$DB->query($req);
		return $liste->fetchAll();
		
		$req2="SELECT * FROM users";
		$liste=$DB->query($req2);
		return $liste->fetchAll();
		
		
	}
}
?>