<?PHP
session_start();
//$_SESSION['user_session']=11;
include("commande.php");
include("config.php");
$comm=new commande($_SESSION['user_session'],0,0,0,0,0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();

$comm->nouvellecommande($DB,$_SESSION['user_session']);

header('Location:/AtelierPHP/projetweb/livraison.php');

?>