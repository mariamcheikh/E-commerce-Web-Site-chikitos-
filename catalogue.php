<?php
include("config.php");
class produit{
  private $idproduit;
  function __construct($idproduit,$prixproduit){
    
    $this->idproduit=$idproduit;
    $this->prixproduit=$prixproduit;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET" action="ajoutaupannier.php" >

<?php	
$produit=new produit(0,0);
$DB_cnx = new DBase_Connection();
$DB=$DB_cnx->PDO_DBconnc();
$prodd=$DB->query('SELECT * FROM produit');
?>
<div class="row">
<?php
foreach ($prodd  as  $donnees) {
    
?>

  <div class="col-md-4 products-right-grids-bottom-grid">
    <div class="thumbnail">

      <img src="..." alt="...">
      <div class="caption">
      	<input type="checkbox" name="add[]" value="<?php echo $donnees['idproduit']?>">
        <h3><?php echo $donnees['idproduit']?></h3>
        <h6><?php echo $donnees['prixproduit']?></h6>
       
      </div>
    </div>
  </div>
  <?php 
}
?>
<div class="simpleCart_shelfItem products-right-grid1-add-cart">
	<a class="item_add" href="#">ADD </a>
 <p><input class="item_add" type="submit" value="ajouter au pannier"></p>
 <?php header('Location:/AtelierPHP/projet/furniture.php');?>

</div>


</div>

</form>
</body>
</html>