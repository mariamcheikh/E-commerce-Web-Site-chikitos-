
<!DOCTYPE html>
<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    <title>Gestion des Produits</title>
	<!-- Custom fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="style.css">
    <link href="css1/bootstrap.min.css" rel="stylesheet" />
    <link href="css1/basic-template.css" rel="stylesheet" />

	<!-- BootstrapValidator CSS -->
    <link href="css1/bootstrapValidator.min.css" rel="stylesheet"/>

	<!-- Custom styles for this template -->
    <link href="css1/account.css" rel="stylesheet">
	
    <!-- jQuery and Bootstrap JS -->
	<script src="js1/jquery.min.js" type="text/javascript"></script>
	<script src="js1/bootstrap.min.js" type="text/javascript"></script>
		
	<!-- BootstrapValidator -->
    <script src="js1/bootstrapValidator.min.js" type="text/javascript"></script>
	<!-- reCaptchaValidator -->
    <script src="js1/reCaptcha2.min.js" type="text/javascript"></script>
	<script src="js1/reCaptcha2.js" type="text/javascript"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CHIKITOS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
     <div class="row">
           <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Gerer les Comptes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Gerer les Commandes</a></li>
            <li><a href="afficheContact.php"><span class="glyphicon glyphicon-list"></span> Gérer les Contacts</a></li>
            <li><a href="admin/Gerer_Traiteur.php"><span class="glyphicon glyphicon-list-alt"></span> Espace Réservation</a></li>
            <li><a href="afficheReclammation.php"><span class="glyphicon glyphicon-cog"></span> Gerer les reclammations</a></li>
			 <li><a href="Dashboards.php"><span class="glyphicon glyphicon-cog"></span> Gerer les produits</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="panel panel-warning">
          <div class="panel-heading">Gestion des Produits</div>
			  <div class="panel-body">
			    <div class="table-responsive">


 <link rel="css4/stylesheet" href="style.css">
<?PHP
include_once ("crudProduit.php");
$cc=new crudProduit();

if (isset($_POST['enregistrerModif'])){
	$newProduit=new Produit($_POST['taille'],$_GET['nom'],$_POST['description'],$_POST['image'],$_POST['prixproduit'],$_POST['categorie']);
	$cc->modifierProduit($newProduit,$cc->conn);
	header('location:afficheProduit.php');
}
else{
$nom=$_GET['nom'];
$produit=$cc->recupererProduit($nom,$cc->conn);
//var_dump($produit);
?>
<form method="POST">
<table class="responstable">
<?PHP foreach ($produit as $ch){ ?>

<tr><td>taille <select name="taille">
<option value ="Aucun">Aucun</option>
<option value ="Large">Large</option>
<option value= "Moyenne">Moyenne</option>
</select></td>

<td>nom<input type="text" name="nom" value="<?PHP echo $ch['nom'];  ?>"></td>

<td>description <input type="text" name="description" value="<?PHP echo $ch['description'];  ?>"></td>

<td>image <input type="file" name="image" </td>

<td>prix <input type="text" name="prixproduit" value="<?PHP echo $ch['prixproduit'];  ?>"></td>

<td>categorie <select name="categorie">
<option value ="Pizza">Pizza</option>
<option value ="Plats">Plats</option>
<option value= "Baguette Farcie">Baguette Farcie</option>
</select></td>
</tr>

<tr>


<td><input type="submit" value="enregistrer" name="enregistrerModif"> </td>

</tr>
<?PHP } ?>
</table>
</form>
<?PHP } ?>





 </div>
			  </div>
		   </div>



</div>
</body>
</html>