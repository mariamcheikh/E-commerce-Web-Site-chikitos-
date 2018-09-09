<?php
include("commande.php");
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="supprimer.php">
<table border="1">
<tr>
<td>id commande</td>
<td>id client</td>
<td>date commande</td>
<td>date livraison</td>
<td>adresse livraison</td>
<td>mode de paiement</td>

</tr>
<tr>
<?php
$comm=new commande(0,0,0,0,0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();
$comm->affichercommande($DB);
?>
</tr>
<td><input type="submit" value="submit"></td>
</table>
</form>
</body>
</html>