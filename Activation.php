<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    <title>Activation du Compte</title>
	<!-- Custom fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/basic-template.css" rel="stylesheet" />
    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<?php
require'Email_Validation.php';
require'PDO_DB_Config.php';
$DBase=new DBase_Connection();
$DB=$DBase->DB_Connection();
$EmailVal=new Emailvalidation();
$EmailVal->set_email($_GET['email']);
$EmailVal->set_key($_GET['keys']);
?>
<?php
if ($EmailVal->account_activation($DB)==true) {?>
    <div class="alert alert-success" style="margin-top:30px">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Votre Compte a été activée avec succés.
        </div>
<?php
}elseif ($EmailVal->account_activation($DB)==false) { ?>
      <div class="alert alert-warning" style="margin-top:30px">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong> Donnée incorrecte
        </div>
<?php
}
?>
           
<center><img src="images/chikitos.jpg" class="img-rounded" alt="Cinque Terre" width="900" height="700"></center>

</div>
</body>
</html>
