<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>
<?php

include_once ("crudCommentaires.php");

$cc=new crudCommentaires(); 

if ( isset($_POST['user_id'])and isset($_POST['idproduit']) and isset($_POST['description']) )
 {
	$var=$_POST['nom'];
$comm=new Commentaires($_POST['user_id'],$_POST['idproduit'],$_POST['description']);	

$cc->insertCommentaires($comm,$cc->conn);
echo'<body onLoad="alert(\'Votre Insertion est effectuée avec succès..\')">';
echo "Insertion effectuée avec succès";
}
else{
	echo "Insertion n'est pas effectuée par  succès";
}
header("Location: single.php?nom=$var");

?>




