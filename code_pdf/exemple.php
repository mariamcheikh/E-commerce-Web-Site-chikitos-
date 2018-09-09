<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World !');
//$pdf->Cell(40,10,'Hi !');
$pdf->Image('chikitos1.png',10,10,-100);
//$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
//$pdf->output('Fichier.pdf','D');
$pdf->Output('Fichier.pdf','D');
//$pdf->Output();
?>
