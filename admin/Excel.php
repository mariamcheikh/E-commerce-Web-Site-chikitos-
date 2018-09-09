<?php
include 'lib/CrudBackOff.php';
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Export traiteur.csv"');
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
$req = $cc->DisplayTraiteur($conn);
?>
"Id";"Cin";"Nom";"Prenom";"Adresse";"téléphone";"age";"diplome";"email";"salaire";"etat"<?php
while ($data = $req->fetch()) {
$id=$data['Id_tra'];
$Cin=$data['Cin'];
$nom=$data['Nom'];
$Prenom=$data['Prenom'];
$adresse=$data['Adresse'];
$telephone=$data['Num_tele'];
$age=$data['Age'];
$Diplome=$data['Diplome'];
$email=$data['Email'];
$salaire=$data['salaire_plats'];
$etat=$data['etat'];
echo "\n";
echo $id.";".$Cin.";".$nom.";".$Prenom.";".$adresse.";".$telephone.";".$age.";".$Diplome.";".$email.";".$salaire.";".$etat;
}
?>
