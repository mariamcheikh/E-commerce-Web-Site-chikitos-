<?PHP
session_start();
//$_SESSION['user_session']=11;
include("commande.php");
include 'ligne.php';
include("config.php");
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();

$comm=new commande($_SESSION['user_session'],0,0,0,0,0);

$ligne=new ligne($comm->recupercommande($DB,$_SESSION['user_session']),0,0);
$pp=$_POST['champmodif'];
$ligne->ajouterquantite($DB,$pp);
header('Location:/AtelierPHP/projetweb/checkout.php');

?>