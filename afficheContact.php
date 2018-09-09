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
    <title>Gestion des Contacts</title>
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
	<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch_mariam.php?q="+str,true);
  xmlhttp.send();
}
</script>
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
        <li><a href="Dashboard.php"><span class="glyphicon glyphicon-user"></span> Gerer les Comptes</a></li>
            <li><a href="affiche_commande.php"><span class="glyphicon glyphicon-list-alt"></span> Gerer les Commandes</a></li>
            <li class="active"><a href="afficheContact.php"><span class="glyphicon glyphicon-list"></span> Gérer les Contacts</a></li>
            <li><a href="admin/Gerer_Traiteur.php"><span class="glyphicon glyphicon-list-alt"></span> Espace Réservation</a></li>
           <li><a href="afficheReclammation.php"><span class="glyphicon glyphicon-cog"></span> Gerer les reclammations</a></li>
		   	 <li><a href="Dashboards.php"><span class="glyphicon glyphicon-cog"></span> Gerer les produits</a></li>
          </ul>
        </div>
       
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="panel panel-warning">
          <div class="panel-heading"> <br>Gestion des Contact<br>
	<br></div>
			  <div class="panel-body">
			    <div class="table-responsive">

	<?php
include ("crudContact.php");
$cc=new crudContact();

if (isset($_POST["supprimer"])){
	$cc->supprimerContact($_POST["id_contact"],$cc->conn);
	
}

$list=$cc->afficheContact($cc->conn);
	//var_dump($list);
	?> 
	
	<br>
	<h1>Liste des contact</h1>
	<br>
	<br>
	<!-- rechercher_dynamique -->
	<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
	<!-- rechercher_dynamique -->
 <table  class="table table-striped">
              <thead>
                <tr>
                 
                  <th>Nom</th>
                  <th>Telephone</th>
                  <th>Adresse mail</th>
                  <th>Message</th>
                  <th>Suppression</th>
                </tr>
              </thead>
              
             
	
	<?php
	foreach ($list as $l){
    ?>
	<tr>

	<td><?php echo $l['nom']?></td>
	<td><?php echo $l['telephone']?></td>
	<td><?php echo $l['mail']?></td>
	<td><?php echo $l['message']?></td>
	
	
	<td><form action="" method="POST">
	<input type="submit" value="supprimer" name="supprimer">
	<input type="text" value="<?PHP echo $l['id_contact'] ?>" name="id_contact" hidden>
	</form> </td>
	</tr>
	<?php
	}
		//<a href="index.php"> Envoyer une SMS de confirmation </a> 
	?>
	</table>
   <table id="MyTable" hidden class="table table-striped">
              <thead>
                <tr>
                 
                  <th>Nom</th>
                  <th>Telephone</th>
                  <th>Adresse mail</th>
                  <th>Message</th>
                
                </tr>
              </thead>
              
             
	
	<?php
	foreach ($list as $l){
    ?>
	<tr>

	<td><?php echo $l['nom']?></td>
	<td><?php echo $l['telephone']?></td>
	<td><?php echo $l['mail']?></td>
	<td><?php echo $l['message']?></td>

	</tr>
	<?php
	}
		//<a href="index.php"> Envoyer une SMS de confirmation </a> 
	?>
	</table>
	
		 </div>
			  </div>
		   </div>
		   <br>
		   <a href="javascript:fnExcelReport()">Exporter en Excel</a><br>
     <a href="rechercherContact_mail.php">Rechercher un Contact par mail</a>
	<br>
	 <a href="rechercherContact.php">Rechercher un Contact par Nom</a>
	<br>
<script>
                            function fnExcelReport()
         {
               var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
               var textRange; var j=0;
               tab = document.getElementById('MyTable'); // id of table
  
               for(j = 0 ; j < tab.rows.length ; j++)
               {    
                     tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                     //tab_text=tab_text+"</tr>";
               }
  
               tab_text=tab_text+"</table>";
   
               var ua = window.navigator.userAgent;
               var msie = ua.indexOf("MSIE ");
  
               if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
               {
                  txtArea1.document.open("txt/html","replace");
                  txtArea1.document.write(tab_text);
                  txtArea1.document.close();
                  txtArea1.focus();
                  sa=txtArea1.document.execCommand("SaveAs",true,"Global View Task.xls");
               } 
               else //other browser not tested on IE 11
                  sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text)); 
                 return (sa);
            }
                            </script>
	<br>
	
	<br>
	<br>

</div>
</body>
</html>


