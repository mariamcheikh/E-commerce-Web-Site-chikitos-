<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your Name">
    <title>Administrateur</title>
	<!-- Custom fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Bootstrap CSS -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin/css/basic-template.css" rel="stylesheet" />

	<!-- BootstrapValidator CSS -->
    <link href="../admin/css/bootstrapValidator.min.css" rel="stylesheet"/>

	<!-- Custom styles for this template -->
    <link href="../admin/css/account.css" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
	<script src="../admin/js/jquery.min.js" type="text/javascript"></script>
	<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- BootstrapValidator -->
    <script src="../admin/js/bootstrapValidator.min.js" type="text/javascript"></script>
	<!-- reCaptchaValidator -->
    <script src="../admin/js/reCaptcha2.min.js" type="text/javascript"></script>
	<script src="../admin/js/reCaptcha2.js" type="text/javascript"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" language="Javascript" src="../admin/Js/jquery.js"></script>


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
        <li><a href="../logout.php">Logout</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid" >
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <?php if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/Index.php') { ?>
    <li class="active"><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
      <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
      <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
      <li><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
      <li><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
      <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
      <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>

    </ul>
  </div>
</div>
</div>
  <?php
 }
  //die();
  ?>
<?php
if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/Gerer_Traiteur.php') {
  ?>
        <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
        <li class="active"><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
        <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
        <li><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
        <li><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
        <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
        <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
      </ul>
    </div>
  </div>
</div>
        <?php }
        //die();
         ?>
         <?php
         if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/ConfirmReservTrai.php') {
           ?>
                 <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
                 <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
                 <li class="active" ><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
                 <li><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
                 <li><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
                 <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
                 <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
               </ul>
             </div>
           </div>
         </div>
                 <?php }
                 //die();
                  ?>
                  <?php
                  if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/AjoutTable.php') {
                    ?>
                          <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
                          <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
                          <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
                          <li class="active"><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
                          <li><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
                          <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
                          <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                          <?php }
                          //die();
                           ?>
                           <?php
                           if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/Gerer_table.php') {
                             ?>
                                   <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
                                   <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
                                   <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
                                   <li ><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
                                   <li class="active"><a href="Gérer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
                                   <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
                                   <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
                                 </ul>
                               </div>
                             </div>
                           </div>
                                   <?php }
                                   //die();
                                    ?>
                                    <?php
                                    if ($_SERVER['SCRIPT_NAME'] == '/AtelierPHP/projetweb/admin/ConfirmReservTable.php') {
                                      ?>
                                            <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
                                            <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
                                            <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
                                            <li ><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
                                            <li ><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
                                            <li class="active"><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
                                            <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                            <?php }
                                            //die();
                                             ?>

         <?php
         if (($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/Gerer_Traiteur.php')&&($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/Index.php')
         &&($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/ConfirmReservTrai.php')&&($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/AjoutTable.php')
         &&($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/Gerer_table.php')&&($_SERVER['SCRIPT_NAME'] != '/AtelierPHP/projetweb/admin/ConfirmReservTable.php')) {
           ?>
                 <li><a href="Index.php"><span class="glyphicon glyphicon-plus"></span>Ajout un traiteur</a></li>
                 <li><a href="Gerer_Traiteur.php"><span class="glyphicon glyphicon-th-list"></span> Gérer les traiteur</a></li>
                 <li><a href="ConfirmReservTrai.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de traiteur </a></li>
                 <li><a href="AjoutTable.php"><span class="glyphicon glyphicon-plus"></span>Ajout une table</a></li>
                 <li><a href="Gerer_table.php"><span class="glyphicon glyphicon-th-list"></span>Gérer les tables </a></li>
                 <li><a href="ConfirmReservTable.php"><span class="glyphicon glyphicon-pencil"></span>Gérer les confirmation des réservation de table </a></li>
                 <li><a href="../Dashboard.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour </a></li>
               </ul>
             </div>
           </div>
         </div>
                 <?php }
                 //die();
                  ?>
