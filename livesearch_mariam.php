<?php

include ("crudContact.php");

$cc=new crudContact();
$liste=$cc->dy_search($_GET['q'],$cc->conn);
$liste_mail=$cc->dy_search_mail($_GET['q'],$cc->conn);
foreach($liste as $l)
{

echo $l[0];
 echo '</br>';

}
foreach($liste_mail as $l)
{
	echo $l[0];
 echo '</br>';
	
}
?>