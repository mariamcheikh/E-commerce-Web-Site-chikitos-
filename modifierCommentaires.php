<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>


<?PHP
include_once ("crudCommentaires.php");
$cc=new crudCommentaires();

if (isset($_POST['enregistrerModif'])){
	$newCommentaires=new Commentaires($_POST['user_id'],$_GET['idproduit'],$_POST['description']);
	$cc->modifierCommentaires($newCommentaires,$cc->conn);
	header('location:afficheCommentaires.php');
}
else{
$user_id=$_GET['user_id'];
$commentaires=$cc->recupererCommentaires($user_id,$cc->conn);
//var_dump($produit);
?>
<form method="POST">
<table class="table table-striped">
<?PHP foreach ($commentaires as $ch){ ?>
<tr>
<td>user_id<input type="text" name="user_id" value="<?PHP echo $ch['user_id'];  ?>"></td>
<td>id_produit<input type="text" name="idproduit" value="<?PHP echo $ch['idproduit'];  ?>"></td>
<td>description <input type="text" name="description" value="<?PHP echo $ch['description'];  ?>"></td>

</tr>
<tr>
<td><input type="submit" value="enregistrer" name="enregistrerModif"> </td>
</tr>
<?PHP } ?>
</table>
</form>
<?PHP } ?>