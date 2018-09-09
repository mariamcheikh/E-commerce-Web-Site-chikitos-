<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>
<?php

include_once ("crudRating.php");

$cc=new crudRating(); 

if ( isset($_POST['user_id'])and isset($_POST['idproduit']) and isset($_POST['rating']) )
 {
	$var=$_POST['nom'];
$comm=new Rating($_POST['user_id'],$_POST['idproduit'],$_POST['rating']);	

$cc->insertRating($comm,$cc->conn);
echo'<body onLoad="alert(\'Votre Insertion est effectuée avec succès..\')">';
echo "Insertion effectuée avec succès";
}
else{
	echo "Insertion n'est pas effectuée par  succès";
}
header("Location: single.php?nom=$var");

?>




