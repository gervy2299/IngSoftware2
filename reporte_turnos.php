<?php 
header("Content-Type: text/html;charset=utf-8");
?>
<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  $this->Image('recursos/relo.png',85,15,20);
  $this->Image('recursos/restau.png',10,15,28);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    $this->SetTextColor(200);
    // Movernos a la derecha
    $this->Cell(110);
    // Título
    $this->Cell(30,15,'REPORTE DE TURNOS',0,0,'C');
  
    // Salto de línea
    $this->Ln(30);


    //cabecera/ cuerpo
    $this->Cell(15,7,'Id',1,0,'C',1);
    $this->Cell(45,7,'Turno Tarde',1,0,'C',1);
    $this->Cell(45,7,'Tuerno Noche',1,0,'C',1);
    $this->Cell(20,7,'Mesa',1,0,'C',1);
    $this->Cell(20,7,'Delivery',1,0,'C',1);
    $this->Cell(50,7,'Categoria',1,0,'C',1);
    $this->Cell(65,7,'Empleado',1,1,'C',1); 
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//conexion
require 'conexion.php';
$consulta1="SELECT * FROM vvturno";
$resultado1=$mysqli->query($consulta1);
// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//$pdf->SetTextColor(100); //color

while($mostrar=$resultado1->fetch_assoc()){
$pdf->Cell(15,7,$mostrar['idEmpleado'],1,0,'L',0);
$pdf->Cell(45,7,$mostrar['Tarde'],1,0,'L',0);
$pdf->Cell(45,7,$mostrar['Noche'],1,0,'L',0);
$pdf->Cell(20,7,$mostrar['Cod_Mesa'],1,0,'C',0);
$pdf->Cell(20,7,$mostrar['Cod_Delivery'],1,0,'C',0);
$pdf->Cell(50,7,$mostrar['Categoria'],1,0,'L',0);
$pdf->Cell(65,7,$mostrar['persona'],1,1,'L',0);

}
$pdf->Ln(8);
$pdf->Cell(80, 5,'Ancash, Huaraz ,  '. date('d') . ' de '. date('F'). ' de '. date('Y'), 0,1,'C');
$pdf->Output();
?>

