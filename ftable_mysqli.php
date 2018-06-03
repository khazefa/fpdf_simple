<?php
require('includes/mysqli_table.php');

class PDF extends PDF_MySQL_Table
{
	function Header()
	{
		// Title
		$this->SetFont('Arial','',18);
		$this->Cell(0,6,'Data Pegawai',0,1,'C');
		$this->Ln(10);
		// Ensure table header is printed
		parent::Header();
	}
}

// Connect to database
$link = mysqli_connect('localhost','root','secret','db_pegawai');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'select * from pegawai order by nama');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('nip',40,'','C');
$pdf->AddCol('nama',40,'Name');
$pdf->AddCol('email',40,'Alamat Email','R');
$prop = array('HeaderColor'=>array(255,150,100),
            'color1'=>array(210,245,255),
            'color2'=>array(255,255,210),
            'padding'=>2);
$pdf->Table($link,'select nip, nama, email from pegawai order by nama limit 0,10',$prop);
$pdf->Output();
?>