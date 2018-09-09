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
    <title>Gestion des Commentaires</title>
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
          <ul class="dropdown-menu ">
										<li><a href="User_Account.php"><span class="glyphicon glyphicon-user"></span> Mon Compte</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Mes Commandes</li>
										<li><a href="reclammation.php"><span class="glyphicon glyphicon-barcode"></span> reclamation</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Gérer mes Avis</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mes Message</li>
										<li><a href="Reservation_traiteur.php"><span class="glyphicon glyphicon-list"></span> Mes réservation des traiteurs</li>
										<li><a href="Reservation_table.php"><span class="glyphicon glyphicon-list"></span> Mes réservation des tables</li>
										<li><a href="User_AccountSetting.php"><span class="glyphicon glyphicon-cog"></span> Parametre du compte</a></li>
											 <li><a href="Dashboards.php"><span class="glyphicon glyphicon-cog"></span> Gerer les produits</a></li>
										<li class="divider"></li>
										<li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span>Déconnexion</a></li>

									</ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="panel panel-warning">
          <div class="panel-heading">Gestion des Commentaires</div>
			  <div class="panel-body">
			    <div class="table-responsive">
<?php
include_once ("crudCommentaires.php");
$cc=new crudCommentaires();

if (isset($_POST["supprimer"])){
	$cc->supprimerCommentaires($_POST["user_id"],$cc->conn);
	
}


$list=$cc->afficheCommentaires($cc->conn);
	//var_dump($list);
	?> 
	<h1>Liste des Commentaires</h1>
	<table border="1" class="responstable">
	<tr>
	<td>user_id</td><td>id_produit</td><td>description</td><td>Suppression</td>
	</tr>
	
	<?php
	foreach ($list as $l){
    ?>
	<tr>
	
	<td><?php echo $l['user_id']?></td>
	<td><?php echo $l['idproduit']?></td>
	<td><?php echo $l['description']?></td>
	
	
	<td><a href="modifierCommentaires.php?user_id=<?php echo $l['user_id']; ?>">Modifier</a></td>
	<td><form action="" method="POST">
	<input type="submit" value="supprimer" name="supprimer">
	<input type="text" value="<?PHP echo $l['user_id'] ?>" name="user_id" hidden>
	</form> </td>
	</tr>
	<?php
	}
	?>
	</table>
    <a href="interfaceAjoutC.html">Interface Ajout Commentaires</a>
	<br></br>
	
	 <a href="rechercherCommentaires.php">Interface De Recherche Des Commentaires</a>
	
	
	
	
	
	
	
	
	
	
	
  </div>
			  </div>
		   </div>



</div>
</body>
</html>