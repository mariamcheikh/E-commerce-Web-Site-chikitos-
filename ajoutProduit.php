<?php session_start();
if (empty($_SESSION['admin_session'])) {
header ('location:AdminLogin.php');
  exit; 
}
 ?>





<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    <title>Geston des Produits</title>
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














<?php
include_once ("crudProduit.php");

$cc=new crudProduit(); 

if ( isset($_POST['taille'])and isset($_POST['nom']) and isset($_POST['description'])and isset($_FILES['image']) and isset($_POST['prixproduit']) and isset($_POST['categorie']) )
 {
	 $file;
		
		if(isset($_FILES['image']))
	    { 
	      $file = $_FILES['image']; 
	    } 
	    $file =$_FILES['image']; 

	    if ($_FILES['image']['size'] == 0)
		{
		    echo 'ERREUR : Veuillez selectionner une image !';
		}

	    else 
	    {
	        $image =addslashes(file_get_contents ($_FILES['image']['tmp_name']));
	        $image_name = addslashes($_FILES['image']['name']);
	        	
	        		//if($conn->query($req1))
			        //{
			          //echo"Success!! \n";
			          //header('Location: afficheProduit.php');
			        //}
			        
			        //else
			        //{
			          //print_r($conn->errorInfo());
			          //$id=$conn->lastInsertId();
			          //echo $id;

			          //$imagefile=$conn->query("SELECT image from produits WHERE nom=".$nom);
			          //$result=$imagefile->fetchAll(PDO::FETCH_NUM);

			          //foreach($result as $the_image)
			          //{
			          //  echo '<img src="data:image/jpeg;base64,'.base64_encode($the_image[0]).'" />';
			         // }       
			         //echo 'Successfull';
			        //}
			        

			
		}
	//include_once 'PictureProduct.php'; 
	//$list=$cc->SearchLastImage($cc->conn);
//foreach ($list as $l){
    	
	//$image=$l['image'];
					   
						
$prodd=new Produit($_POST['taille'],$_POST['nom'],$_POST['description'],$image,$_POST['prixproduit'],$_POST['categorie']);	

$cc->insertProduit($prodd,$cc->conn);


//header('Location:/afficheProduit.php');

echo'<body onLoad="alert(\'Votre Insertion est effectuée avec succès..\')">';
echo "Insertion effectuée avec succès";
}
else{
	echo "Insertion n'est pas effectuée par  succès";
}
 

?>
<form action="afficheProduit.php" method="POST">
<input type="submit" value="afficher" name="afficher">
</form>










 </div>
			  </div>
		   </div>



</div>
</body>
</html>