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
 $this->Image('recursos/rese.png',95,10,20);
   $this->Image('recursos/restau.png',10,15,28);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
     $this->SetTextColor(200);
    // Movernos a la derecha
    $this->Cell(110);
    // Título
    $this->Cell(100,15,'REPORTE DE RESERVA DE EMPLEADOS',0,0,'C');
    // Salto de línea
    $this->Ln(30);


    //cabecera/ cuerpo
    $this->Cell(15,7,'Id',1,0,'C',1);
    $this->Cell(66,7,'Empleado',1,0,'C',1);
    $this->Cell(25,7,'Telefono',1,0,'C',1);
    $this->Cell(42,7,'Categoria',1,0,'C',1);
    $this->Cell(15,7,'Mesa',1,0,'C',1);
    $this->Cell(18,7,'Delibery',1,0,'C',1);
    $this->Cell(45,7,'Especialidades',1,0,'C',1);
    $this->Cell(45,7,'Paltos',1,0,'C',1);
    $this->Cell(42,7,'Detalles',1,0,'C',1);
    $this->Cell(40,7,'Turno Tarde',1,0,'C',1);
    $this->Cell(40,7,'Turno Noche',1,0,'C',1);
    $this->Cell(15,7,'Precio',1,1,'C',1);
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
$consulta1="SELECT * FROM reservaemple";
$resultado1=$mysqli->query($consulta1);
// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//$pdf->SetTextColor(100); //color

while($mostrar=$resultado1->fetch_assoc()){
$pdf->Cell(15,7,$mostrar['reserva_id_Reserva'],1,0,'L',0);
$pdf->Cell(66,7,$mostrar['Empleado'],1,0,'L',0);
$pdf->Cell(25,7,$mostrar['Telefono'],1,0,'C',0);
$pdf->Cell(42,7,$mostrar['Categoria'],1,0,'C',0);
$pdf->Cell(15,7,$mostrar['reserva_Cod_Mesa'],1,0,'L',0);
$pdf->Cell(18,7,$mostrar['reserva_Cod_Delivery'],1,0,'C',0);
$pdf->Cell(45,7,$mostrar['especialidades_Nombre'],1,0,'L',0);
$pdf->Cell(45,7,$mostrar['platos_Nombre'],1,0,'L',0);
$pdf->Cell(42,7,$mostrar['platos_Detalles'],1,0,'L',0);
$pdf->Cell(40,7,$mostrar['turno_Tarde'],1,0,'L',0);
$pdf->Cell(40,7,$mostrar['turno_Noche'],1,0,'C',0);
$pdf->Cell(15,7,$mostrar['platos_Precio'],1,1,'C',0);
}

$pdf->Ln(8);
$pdf->Cell(80, 5,'Ancash, Huaraz ,  '. date('d') . ' de '. date('F'). ' de '. date('Y'), 0,1,'C');
$pdf->Output();
?>

