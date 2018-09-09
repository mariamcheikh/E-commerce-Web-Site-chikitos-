<?php
include '../lib/Include.php';
//include '../lib/Auth.php';
include 'lib/AuthAdmin.php';
include '../lib/session.php';
include '../Partials/admin_header.php';
include 'lib/CrudBackOff.php';
include 'lib/Traiteur.php';
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
$cc->DeleteTraiteur($conn,$_POST['delete']);
setflash("traiteur supprimer !!!");
header('Location:Gerer_Traiteur.php');
die();
 ?>
