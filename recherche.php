<?PHP

include("ligne.php");
include("config.php");

$ligne=new ligne(0,0,0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();

	$liste = $ligne->searchdy($DB,$_GET['q']);
	$listeprix = $ligne->searchmulti($DB,$_GET['q']);
	foreach ($liste as $l) {
		echo "<a href='single.php?nom=".$l['nom']."'>'".$l[0]."'</a>";
		echo '</br>';
	}
	foreach ($listeprix as $l) {
		echo "<a href='single.php?nom=".$l['prixproduit']."'>'".$l[0]."'</a>";
		echo '</br>';
	}


?>