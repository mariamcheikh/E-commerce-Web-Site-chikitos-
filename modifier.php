<?PHP
session_start();
//$_SESSION['user_session']=11;
include("commande.php");
include("config.php");
$comm=new commande($_SESSION['user_session'],0,$_POST['date'],$_POST['adresse'],$_POST['choix'],0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();
if (isset($_POST['valider'])){

$comm->modifierlivraison($DB,$_SESSION['user_session']);
header('Location:/AtelierPHP/projetweb/new.php');

}else{
$id=1111;
$donnees=$comm->recupercommande($DB,$id);
?>
<form method="POST">
<table>
<?PHP foreach ($donnees as $ch){ ?>
<tr>
<td>id <input type="text" name="id" value="<?PHP echo $ch['0'];  ?>"></td>
<td>date <input type="date" name="date" value="<?PHP echo $ch['1'];  ?>"></td>
<td>client <input type="text" name="client" value="<?PHP echo $ch['2'];  ?>"></td>
<td>date liv <input type="date" name="date" value="<?PHP echo $ch['3'];  ?>"></td>
<td>adresse <input type="text" name="adresse" value="<?PHP echo $ch['4'];  ?>"></td>
<td>mode <input type="text" name="mode" value="<?PHP echo $ch['5'];  ?>"></td>
</tr>
<tr>
						<td><div class="container">
								<input type="submit" value="valider" name="valider" class="btn btn-danger">
      
						</div> </td>
</tr>
<?PHP } ?>
</table>
</form>
<?PHP } ?>