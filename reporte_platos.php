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
     $this->Image('recursos/restau.png',10,15,28);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
      $this->SetTextColor(200);
    // Movernos a la derecha
    $this->Cell(80);
  $this->Cell(2,15,'REPORTE DE PLATOS',0,0,'C');
    $this->Ln(10); //espacio de 10para que siga la siguiente linea

   
    // Salto de línea
    $this->Ln(20);

    //cabecera/ cuerpo
    $this->Cell(20,6,'ID',1,0,'C',1);
    $this->Cell(53,6,'Nombre',1,0,'C',1);
    $this->Cell(50,6,'Detalles',1,0,'C',1);
    $this->Cell(25,6,'Precio',1,1,'C',1);

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
$consulta1="SELECT * FROM platos";
$resultado1=$mysqli->query($consulta1);


// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//$pdf->SetFillColor(144,71,71);
//los primeros numeros es el tamaño de celda 
//$pdf->SetTextColor(400); //color


while($mostrar=$resultado1->fetch_assoc()){
$pdf->Cell(20,6,$mostrar['id_Platos'],1,0,'L',0);
$pdf->Cell(53,6,$mostrar['Nombre'],1,0,'L',0);
$pdf->Cell(50,6,$mostrar['Detalles'],1,0,'L',0);
$pdf->Cell(25,6,$mostrar['Precio'],1,1,'C',0);



}
 $pdf->Ln(20);
 $pdf->Cell(70, 5,'Huaraz ,'. date('d') . ' de '. date('F'). ' de '. date('Y'), 0,1,'C');
//$pdf->Cell(40,10,date('d/m/Y'),0,1,'L'); // otro formato de fecha
$pdf->Output();

?>