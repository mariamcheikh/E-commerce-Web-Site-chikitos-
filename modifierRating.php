<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>

<?PHP
include_once ("crudRating.php");
$cc=new crudRating();

if (isset($_POST['enregistrerModif'])){
	$newRating=new Rating($_POST['user_id'],$_GET['idproduit'],$_POST['rating']);
	$cc->modifierRating($newRating,$cc->conn);
	header('location:afficheRating.php');
}
else{
$user_id=$_GET['user_id'];
$rating=$cc->recupererRating($user_id,$cc->conn);
//var_dump($produit);
?>
<form method="POST">
<table class="table table-striped">
<?PHP foreach ($rating as $ch){ ?>
<tr>
<td>user_id<input type="text" name="user_id" value="<?PHP echo $ch['user_id'];  ?>"></td>
<td>id_produit<input type="text" name="idproduit" value="<?PHP echo $ch['idproduit'];  ?>"></td>
<td>rating <input type="text" name="rating" value="<?PHP echo $ch['rating'];  ?>"></td>

</tr>
<tr>
<td><input type="submit" value="enregistrer" name="enregistrerModif"> </td>
</tr>
<?PHP } ?>
</table>
</form>
<?PHP } ?>