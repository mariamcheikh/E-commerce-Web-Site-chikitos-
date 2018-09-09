<?php
require('fpdf.php');
include '../CrudFrontOffice.php';
include '../lib/Auth.php';
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
$req = $c->SearchReserv_tab($conn,$_SESSION['id_tab']);
$data = $req->fetch();
$pdf->Cell(70);
$pdf->Cell(0, 30, 'date de reservation :' . $data['Date_reserv'] ,0, 1);
$pdf->Cell(70);
$pdf->Cell(0, 30, 'Prix de reservation :'. $data['Prix_reserv'] ,0, 1);
$pdf->Cell(70);
$pdf->Cell(0, 30, 'Nombre de personne : '. $data['Nbr_pers'] ,0, 1);
$pdf->Output("Reservation_table.pdf","D");
?>