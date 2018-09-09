<?php
include 'CrudFrontOffice.php';
extract($_POST);
$c = new  CrudFrontOff();
$conn = $c->getConnexion();
$req = $conn->prepare("INSERT INTO Commantaire (pseudo,contenu) VALUES (?,?)");
$req->bindParam(1,$pseudo);
$req->bindParam(2,$msg);
$req->execute();
?>