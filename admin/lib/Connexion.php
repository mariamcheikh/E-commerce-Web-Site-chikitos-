<?php
class config{
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
}
?>
