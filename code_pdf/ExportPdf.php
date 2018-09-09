<?php
require('fpdf.php');
include '../CrudFrontOffice.php';
include '../lib/Auth.php';
//include 'lib/session.php';
//include 'CrudFrontOffice.php';
class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('chikitos1.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(70);
        // Title
        $this->Cell(30,20,'Reservation',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$c = new  CrudFrontOff();
$conn=$c->getConnexion();
$req = $c->SearchReserv_trait($conn,$_SESSION['id_trai']);
$data = $req->fetch();
//$pdf->Cell(80);
//for($i=1;$i<=4;$i++) {
    $pdf->Cell(70);
    $pdf->Cell(0, 30, 'date de reservation :' . $data['Date_reserv'] ,0, 1);
    $pdf->Cell(70);
    $pdf->Cell(0, 30, 'Prix de reservation :'. $data['Prix_reserv'] ,0, 1);
    $pdf->Cell(70);
    $pdf->Cell(0, 30, 'Periode : '. $data['Periode'] ,0, 1);
//}
//$pdf->Output('Reser_traiteur.pdf','D');
$pdf->Output("Réservation_traiteur.pdf","D");
?>