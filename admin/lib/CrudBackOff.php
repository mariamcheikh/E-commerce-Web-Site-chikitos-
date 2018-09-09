<?php
//$auth = 0;
//  include '../lib/Connexion.php';
class CrudBackOff {
 private $conn;
 function getConnexion(){
   $servername="localhost";
   $dbname="ProjetWeb";
   $username="root";
   $password="";
   try {
       $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
   } catch (Exception $e) {
       echo 'Impossible de connecter à la base de donnée';
       echo $e->getMessage();
       die();
       return false;
   }
   return $conn;
 }
 function InsertTraiteur($conn,$c) {
   $req = $conn->prepare("INSERT INTO traiteur (Cin,Nom,Prenom,Adresse,Num_tele,Age,Diplome,Email,salaire_plats,etat) VALUES
   (?,?,?,?,?,?,?,?,?,'non')");
   $req->bindParam(1,$c->getCin());
   $req->bindParam(2,$c->getNom());
   $req->bindParam(3,$c->getPrenom());
   $req->bindParam(4,$c->getAdresse());
   $req->bindParam(5,$c->getNum_tele());
   $req->bindParam(6,$c->getAge());
   $req->bindParam(7,$c->getDiplome());
   $req->bindParam(8,$c->getEmail());
   $req->bindParam(9,$c->getsalaire_plats());
	 $req->execute();
 }
 function DisplayTraiteur($conn) {
   $req = $conn->prepare("SELECT * FROM traiteur");
   $req->execute();
   return $req;
 }
 function DeleteTraiteur($conn,$id) {
   $req = $conn->prepare(" DELETE FROM traiteur WHERE Id_tra=?");
   $req->bindParam(1,$id);
   $req->execute();
 }
 function SearchTraiteur($conn,$id) {
   $req = $conn->prepare("SELECT Cin,Nom,Prenom,Adresse,Num_tele,Age,Diplome,Email,salaire_plats FROM traiteur WHERE Id_tra=?");
   $req->bindParam(1,$id);
   $req->execute();
   return $req;
 }
 function EditTraiteur($conn,$c,$id) {
   $req = $conn->prepare("SELECT etat FROM traiteur WHERE Id_tra=?");
   $req->bindParam(1,$id);
   $req->execute();
   $data = $req->fetch();
   $etat = $data['etat'];
   $req1 = $conn->prepare("UPDATE traiteur SET Cin=?,Nom=?,Prenom=?,Adresse=?,Num_tele=?,Age=?,Diplome=?,Email=?,salaire_plats=?,etat=? WHERE Id_tra=?");
   $req1->bindParam(1,$c->getCin());
   $req1->bindParam(2,$c->getNom());
   $req1->bindParam(3,$c->getPrenom());
   $req1->bindParam(4,$c->getAdresse());
   $req1->bindParam(5,$c->getNum_tele());
   $req1->bindParam(6,$c->getAge());
   $req1->bindParam(7,$c->getDiplome());
   $req1->bindParam(8,$c->getEmail());
   $req1->bindParam(9,$c->getsalaire_plats());
   $req1->bindParam(10,$etat);
   $req1->bindParam(11,$id);
	 $req1->execute();
 }
 function DisplayReservTrait($conn) {
   $req = $conn->prepare("SELECT * FROM reserv_trair WHERE Confirmation='en attend'");
   $req->execute();
   return $req;
 }
 function ConfReservTrait($conn,$id) {
   $req = $conn->prepare("UPDATE reserv_trair SET Confirmation='Confirmer' WHERE Id_tra=?");
   $req->bindParam(1,$id);
   $req->execute();
   $req1 = $conn->prepare("UPDATE traiteur SET etat='reserver' WHERE Id_tra=?");
   $req1->bindParam(1,$id);
   $req1->execute();
 }
 function AnnulReservTrait($conn,$id) {
   $req = $conn->prepare("UPDATE reserv_trair SET Confirmation='Annuler' WHERE Id_tra=?");
   $req->bindParam(1,$id);
   $req->execute();
   $req1 = $conn->prepare("UPDATE traiteur SET etat='non' WHERE Id_tra=?");
   $req1->bindParam(1,$id);
   $req1->execute();
 }
 function InsertTable($conn,$c) {
   $req = $conn->prepare("INSERT INTO tabl (Numero_table,Etat_table) VALUES
   (?,'libre')");
    $req->bindParam(1,$c->getNumero_table());
    $req->execute();
 }
 function DisplayTable($conn) {
   $req = $conn->prepare("SELECT * FROM tabl");
   $req->execute();
   return $req;
 }
 function DeleteTable($conn,$id) {
   $req = $conn->prepare("DELETE FROM tabl WHERE Id_table=?");
   $req->bindParam(1,$id);
   $req->execute();
 }
 function SearchTable($conn,$id) {
   $req = $conn->prepare("SELECT * FROM tabl WHERE Id_table=?");
   $req->bindParam(1,$id);
   $req->execute();
   return $req;
 }
 function EditTable($conn,$num,$id) {
   $req = $conn->prepare("SELECT * FROM tabl WHERE Id_table=?");
   $req->bindParam(1,$id);
   $req->execute();
   $data = $req->fetch();
   $etat = $data['Etat_table'];
   $req1 = $conn->prepare("UPDATE tabl SET Numero_table=?,Etat_table=? WHERE Id_table=?");
   $req1->bindParam(1,$num);
   $req1->bindParam(2,$etat);
   $req1->bindParam(3,$id);
   $req1->execute();
 }
 function DisplayReservTabl($conn) {
   $req = $conn->prepare("SELECT * FROM reserv_tabl WHERE Confirmation='en attend'");
   $req->execute();
   return $req;
 }
 function ConfirmReservTabl($conn,$id) {
   $req = $conn->prepare("UPDATE reserv_tabl SET Confirmation='Confirmer' WHERE Id_table=?");
   $req->bindParam(1,$id);
   $req->execute();
   $req1 = $conn->prepare("UPDATE tabl SET Etat_table='reserver' WHERE Id_table=?");
   $req1->bindParam(1,$id);
   $req1->execute();
 }
 function AnnulReservTabl($conn,$id) {
   $req = $conn->prepare("UPDATE reserv_tabl SET Confirmation='Annuler' WHERE Id_table=?");
   $req->bindParam(1,$id);
   $req->execute();
   $req1 = $conn->prepare("UPDATE tabl SET Etat_table='libre' WHERE Id_table=?");
   $req1->bindParam(1,$id);
   $req1->execute();
 }
}
 ?>
