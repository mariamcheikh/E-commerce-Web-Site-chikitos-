<?php
include 'lib/CrudBackOff.php';
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Export Table.csv"');
$cc = new CrudBackOff();
$conn = $cc->getConnexion();
$req = $cc->DisplayTable($conn);
?>
"Id";"Numero_table";"Etat"<?php
while ($data = $req->fetch()) {
$id=$data['Id_table'];
$Cin=$data['Numero_table'];
$nom=$data['Etat_table'];
echo "\n";
echo $id.";".$Cin.";".$nom;
}
?>
