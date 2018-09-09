<?php
include("ligne.php");
include("config.php");
$ligne=new ligne();
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();

$supprimer=$_POST['champsupp'];

	$ligne->supprimerligne($DB,$supprimer);

header('Location:/AtelierPHP/projetweb/checkout.php');


?>