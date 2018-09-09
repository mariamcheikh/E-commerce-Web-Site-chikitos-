<?php
header('Content-Type: text/csv;');
header('Content-Disposition: attachment; filename="Export tutoriel.csv"');
?>"Id";"Titre";"Durée"<?php
$id=1;
$Titre="ncldsj";
$durre=312;
//echo "\n".'"'.$id.'";"'.$Titre.'";"'.$durre.'"';
echo "\n";
echo $id.";".$Titre.";".$durre;
?>