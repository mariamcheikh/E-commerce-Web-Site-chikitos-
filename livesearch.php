<?php

include_once ("crudProduit.php");
$cc=new crudProduit();
$liste=$cc->dy_search($_GET['q'],$cc->conn);
$liste_categorie=$cc->dy_search_categorie($_GET['q'],$cc->conn);
foreach($liste as $l)
{

echo $l[0];
 echo '</br>';

}
foreach($liste_categorie as $l)
{
	echo $l[0];
 echo '</br>';
	
}
	


?>