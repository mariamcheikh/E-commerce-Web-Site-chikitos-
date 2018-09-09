<?php
//$auth = 0;
include '../lib/Include.php';
//include '../lib/Auth.php';
include 'lib/AuthAdmin.php';
include '../lib/session.php';
include '../Partials/admin_header.php';
include 'lib/CrudBackOff.php';
include 'lib/Traiteur.php';
$c = new traiteur();
$c->setCin($_POST['cin']);
$c->setNom($_POST['non']);
$c->setPrenom($_POST['prenom']);
$c->setAdresse($_POST['Adresse']);
$c->setNum_tele($_POST['telephone']);
$c->setAge($_POST['age']);
$c->setDiplome($_POST['dip']);
$c->setEmail($_POST['email']);
$c->setsalaire_plats($_POST['salaire']);
$cc = new CrudBackOff();
$conn = $cc->getConnexion();;
$cc->EditTraiteur($conn,$c,$_POST['id']);
header('Location:Gerer_Traiteur.php');
?>
