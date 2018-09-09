<?php
session_start();
//$_SESSION['user_session']=11;
include("config.php");
include("ligne.php");
include 'commande.php';

$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();
$comm= new commande($_SESSION['user_session'],0,0,0,0,0);
$ligne=new ligne($comm->recupercommande($DB,$_SESSION['user_session']),0,0);


 if(!empty($_SESSION['user_session'])){
	$ajouter=$_GET['add'];
	for ($i=0; $i <count($ajouter) ; $i++) { 
		$id=$ajouter[$i];
		$liste=$comm->recherche_id_produit($DB,$_SESSION['user_session']);

		foreach ($liste as $l){ 
			if($id==$l[0])
			{

			$ligne->ajouterquantite($DB,$id);

			}
			else{
			?>
			<script>console.log("==>idprod: " + $ajouter[$i] + " !");</script>
			<?php
			$ligne->ajouter($DB,$_SESSION['user_session'],$id); 
			echo $_SESSION['user_session'];

			}
		}
	}
	header('Location:/AtelierPHP/projetweb/products1.php');

	
}
else
{
	header('Location:/AtelierPHP/projetweb/login.php');
}
?>