<?php

class CrudFrontOff {
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
 function Inserttrai($conn,$c) {
     $req2 = $conn->prepare("UPDATE traiteur SET etat='en attend' WHERE Id_tra=?");
     $req2->bindParam(1,$c->getId_tra());
     $req2->execute();
     $req1 = $conn->prepare("SELECT salaire_plats FROM traiteur WHERE Id_tra=?");
     $req1->bindParam(1,$c->getId_tra());
     $req1->execute();
     $data = $req1->fetch();
     $prix = $c->getPeriode()*$data['salaire_plats'];
     $req = $conn->prepare("INSERT INTO reserv_trair (Id_tra,Id_client,Date_reserv,Prix_reserv,Periode,Confirmation) VALUES
     (?,?,?,?,?,'en attend')");
     $req->bindParam(1,$c->getId_tra());
     $req->bindParam(2,$c->getId_client());
     $req->bindParam(3,$c->getDate_reserv());
     $req->bindParam(4,$prix);
     $req->bindParam(5,$c->getPeriode());
     $req->execute();
 }
    function Inserttabl($conn,$c) {
        $req2 = $conn->prepare("UPDATE tabl SET Etat_table='en attend' WHERE Id_table=?");
        $req2->bindParam(1,$c->getId_table());
        $req2->execute();
        $prix = $c->getNbr_pers()*5;
        $req = $conn->prepare("INSERT INTO reserv_tabl (Id_table,Id_client,Date_reserv,Prix_reserv,Nbr_pers,Confirmation) VALUES
     (?,?,?,?,?,'en attend')");
        $req->bindParam(1,$c->getId_table());
        $req->bindParam(2,$c->getId_client());
        $req->bindParam(3,$c->getDate_reserv());
        $req->bindParam(4,$prix);
        $req->bindParam(5,$c->getNbr_pers());
        $req->execute();

    }
 function DisplayReservTrait($conn) {
   $req = $conn->prepare("SELECT * FROM reserv_trair WHERE Id_client=?");
   $req->bindParam(1,$_SESSION['user_session']);
   $req->execute();
   return $req;
 }
 function DisplayReservTable($conn) {
   $req = $conn->prepare("SELECT * FROM reserv_tabl WHERE Id_client=?");
   $req->bindParam(1,$_SESSION['user_session']);
   $req->execute();
   return $req;
 }
    function DisblayTraiteur($conn) {
        $req = $conn->prepare("SELECT * FROM traiteur WHERE etat='non'");
        $req->execute();
        return $req;
    }
    function DisblayTable($conn) {
        $req = $conn->prepare("SELECT * FROM tabl WHERE Etat_table='libre'");
        $req->execute();
        return $req;
    }
    function DisplayComments($conn) {
        $req = $conn->prepare("SELECT * FROM Commantaire");
        $req->execute();
        return $req;
    }
    function DeleteReserv_trai($conn,$id) {
        $req2 = $conn->prepare("UPDATE traiteur SET etat='non' WHERE Id_tra=?");
        $req2->bindParam(1,$id);
        $req2->execute();
        $req = $conn->prepare("DELETE FROM reserv_trair WHERE Id_tra=?");
        $req->bindParam(1,$id);
        $req->execute();
    }
    function DeleteResrv_tab($conn,$id) {
        $req2 = $conn->prepare("UPDATE tabl SET Etat_table='libre' WHERE Id_table=?");
        $req2->bindParam(1,$id);
        $req2->execute();
        $req = $conn->prepare("DELETE FROM reserv_tabl WHERE Id_table=?");
        $req->bindParam(1,$id);
        $req->execute();
    }
    function  SearchReserv_tab($conn,$id) {
        $req = $conn->prepare("SELECT * FROM reserv_tabl WHERE Id_table=?");
        $req->bindParam(1,$id);
        $req->execute();
        return $req;
    }
    function  SearchReserv_trait($conn,$id) {
        $req = $conn->prepare("SELECT * FROM reserv_trair WHERE Id_tra=?");
        $req->bindParam(1,$id);
        $req->execute();
        return $req;
    }
    function UpdateReserv_tab($conn,$c) {
        $prix = $c->getNbr_pers()*5;
        $req = $conn->prepare("UPDATE reserv_tabl SET Date_reserv=?,Prix_reserv=?,Nbr_pers=? WHERE Id_table=?");
        $req->bindParam(1,$c->getDate_reserv());
        $req->bindParam(2,$prix);
        $req->bindParam(3,$c->getNbr_pers());
        $req->bindParam(4,$c->getId_table());
        $req->execute();
    }
    function UpdateReserv_trai($conn,$c) {
        $req1 = $conn->prepare("SELECT salaire_plats FROM traiteur WHERE Id_tra=?");
        $req1->bindParam(1,$c->getId_tra());
        $req1->execute();
        $data = $req1->fetch();
        $prix = $c->getPeriode()*$data['salaire_plats'];
        $req = $conn->prepare("UPDATE reserv_trair SET Date_reserv=?,Prix_reserv=?,Periode=? WHERE Id_tra=?");
        $req->bindParam(1,$c->getDate_reserv());
        $req->bindParam(2,$prix);
        $req->bindParam(3,$c->getPeriode());
        $req->bindParam(4,$c->getId_tra());
        $req->execute();
    }
}

