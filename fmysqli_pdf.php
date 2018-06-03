<?php
// memanggil library FPDF
// require('fpdf/fpdf.php');
require('includes/fpdf_cellfit.php');

$orientation = "P";
$paper_size = "A4";
$width = 0;
$height = 0;

switch ($orientation) {
    case "P":
       switch ($paper_size) {
		   case "A4":
			$width = 210;
			$height = 297;
		   break;
		   case "A5":
			$width = 148;
			$height = 210;
		   break;
		   default:
			$width = 210;
			$height = 297;
		   break;
	   }
	break;
	
    case "L":
        switch ($paper_size) {
		   case "A4":
			$width = 297;
			$height = 210;
		   break;
		   case "A5":
			$width = 210;
			$height = 148;
		   break;
		   default:
			$width = 297;
			$height = 210;
		   break;
	   }
	break;
	
    default:
        switch ($paper_size) {
		   case "A4":
			$width = 210;
			$height = 297;
		   break;
		   case "A5":
			$width = 148;
			$height = 210;
		   break;
		   default:
			$width = 210;
			$height = 297;
		   break;
	   }
	break;
}

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF_CellFit($orientation,'mm',$paper_size);

$pdf->AliasNbPages();
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->Image('img/kominfo.png',10,5,24,24);
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN DATA PEGAWAI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PT SAMPLE FPDF',0,1,'C');
// Garis atas untuk header
$pdf->Line(10, 30, 210-10, 30);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,10,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(($width*(10/100)),6,'NIK',1,0);
$pdf->Cell(($width*(25/100)),6,'NAMA PEGAWAI',1,0);
$pdf->Cell(($width*(45/100)),6,'ALAMAT',1,0);
$pdf->Cell(($width*(10/100)),6,'EMAIL',1,1);

$pdf->SetFont('Arial','',9);

require("includes/constants.php");
require('includes/class.db.php');
$database = DB::getInstance();

$query = "SELECT * FROM pegawai";
$results = $database->get_results( $query );
$no = 1;
foreach( $results as $row )
{
    $pdf->CellFitScale(($width*(10/100)),6,$row['nip'],1,0);
    $pdf->CellFitScale(($width*(25/100)),6,$row['nama'],1,0);
    $pdf->CellFitScale(($width*(45/100)),6,$row['alamat'],1,0);
    $pdf->CellFitScale(($width*(10/100)),6,$row['email'],1,1); 
}

$pdf->Output();
?>