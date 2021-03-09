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
    $this->Image('recursos/personas.png',85,15,20);
  $this->Image('recursos/restau.png',10,15,28);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
     $this->SetTextColor(200);
    // Movernos a la derecha
    $this->Cell(110);
    // Título
    $this->Cell(30,15,'REPORTE DE PERSONAS',0,0,'C');
  
    // Salto de línea
    $this->Ln(30);


    //cabecera/ cuerpo
    $this->Cell(15,7,'Id',1,0,'C',1);
    $this->Cell(20,7,'DNI',1,0,'C',1);
    $this->Cell(40,7,'Nombres',1,0,'C',1);
    $this->Cell(40,7,'Apellido Paterno',1,0,'C',1);
    $this->Cell(40,7,'Apellido Materno',1,0,'C',1);
    $this->Cell(41,7,'Correo',1,0,'C',1);
    $this->Cell(35,7,'Telefono',1,0,'C',1);
    $this->Cell(37,7,'Dirección',1,1,'C',1); 
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
$consulta1="SELECT * FROM persona";
$resultado1=$mysqli->query($consulta1);
// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//$pdf->SetTextColor(100); //color

while($mostrar=$resultado1->fetch_assoc()){
$pdf->Cell(15,7,$mostrar['id_Persona'],1,0,'L',0);
$pdf->Cell(20,7,$mostrar['DNI'],1,0,'L',0);
$pdf->Cell(40,7,$mostrar['Nombres'],1,0,'C',0);
$pdf->Cell(40,7,$mostrar['Apell_Pat'],1,0,'C',0);
$pdf->Cell(40,7,$mostrar['Apell_Mat'],1,0,'C',0);
$pdf->Cell(41,7,$mostrar['Correo'],1,0,'L',0);
$pdf->Cell(35,7,$mostrar['Telefono'],1,0,'C',0);
$pdf->Cell(37,7,$mostrar['Direccion'],1,1,'L',0);
}
$pdf->Ln(8);
$pdf->Cell(80, 5,'Ancash, Huaraz ,  '. date('d') . ' de '. date('F'). ' de '. date('Y'), 0,1,'C');
$pdf->Output();
?>

