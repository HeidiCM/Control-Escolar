<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class BoletaTController extends Controller
{
    //
    public function Boleta3() {

        $pdf=new Fpdf('P', 'mm',array(180, 215));
    
        $pdf->AddPage();
    
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->Image(public_path().'/images/logo.png',20,5,35,10);
        
    $textypos = 5;
    $pdf->setY(10);
    $pdf->setX(65);
    // Agregamos los datos de la empresa
    $pdf->setTextColor(0, 40, 40);
    $pdf->SetFont('Times','B',9);
    $pdf->Cell(5,$textypos,"COLEGIO DE BACHILLERES DEL ESTADO DE YUCATAN");
    $pdf->SetFont('Times','B',8);    
    $pdf->setY(15);$pdf->setX(107);
    $pdf->Cell(5,$textypos,"ESCOLARIZADO",0,0, 'C');
    $pdf->SetFont('Times','B',8);    
    $pdf->setY(20);$pdf->setX(88);
    $pdf->Cell(5,$textypos,"PLANTEL: TEMAX ", 0,0,'R');
    $pdf->SetFont('Times','B',8);    
    $pdf->setY(20);$pdf->setX(124);
    $pdf->Cell(5,$textypos,"CLAVE: 31ECB0021X ", 0,0,'L');
    
    
    $pdf->SetFont('Arial','B',8);    
    $pdf->setY(28);
    $pdf->setX(20);
    $pdf->Cell(5,$textypos,"BOLETA DE CALIFICACIONES DEL PERIODO 2022A");
    $pdf->setY(28);$pdf->setX(125);
    $pdf->SetFont('Arial','',7); 
    $pdf->Cell(5,$textypos,"26 DE ABRIL DE 2022");
    
    
    $pdf->Rect(12, 35, 155, 25, 'D');
    
    // Agregamos los datos del alumno
    $pdf->SetFont('Arial','B',6);    
    $pdf->setY(36);$pdf->setX(31);
    $pdf->Cell(5,$textypos,"MATRICULA:");
    $pdf->SetFont('Arial','B',6);    
    $pdf->setY(36);$pdf->setX(70);
    $pdf->Cell(5,$textypos,"ALUMNO:");
    $pdf->setY(36);$pdf->setX(130);
    $pdf->Cell(5,$textypos,"SIT. ACAD:");
    
    //Agregamos los datos de la calificacion
    $pdf->SetFont('Arial','B',6);    
    $pdf->setY(40);$pdf->setX(15);
    $pdf->Cell(5,$textypos,"SEMESTRE: ");
    $pdf->SetFont('Arial','B',6);    
    $pdf->setY(40);$pdf->setX(50);
    $pdf->Cell(5,$textypos,"GRUPO:");
    $pdf->setY(40);$pdf->setX(80);
    $pdf->Cell(5,$textypos,"GRUPO PARAESCOLAR:");
    $pdf->setY(40);$pdf->setX(130);
    $pdf->Cell(5,$textypos,"PLAN ESTUDIOS:");

    //Se agregan datos de la capacitacion
    $pdf->SetFont('Arial','B',6);    
    $pdf->setY(60);$pdf->setX(80);
    $pdf->Cell(5,$textypos,"F. TRABAJO:");
    
    
    
    
    /// Apartir de aqui empezamos con la tabla de calificaciones
        $pdf->setY(50);$pdf->setX(25);
        $pdf->Ln();

    $pdf->SetFont('Arial','',6);
    $pdf->setY(50);
    $pdf->setX(12);
    $pdf->Cell(31,5,'ASIGNATURA',1,0,'L');
    $pdf->Cell(16,5,'PARCIAL 1',1,0,'C');
    $pdf->Cell(16,5,'PARCIAL 2',1,0,'C');
    $pdf->SetFont('Arial','',5);
    $pdf->Cell(22,5,'%Acum E. PARCIALES',1,0,'C');
    $pdf->Cell(22,5,'EXAMEN ORDINARIO',1,0,'C');
    $pdf->Cell(24,5,'%EXAMEN ORDINARIO',1,0,'C');
    $pdf->Cell(24,5,'CALIFICACION FINAL',1,0,'C');
    ////Calificaciones
    $pdf->SetFont('Arial','',6);
    $pdf->setY(55);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(60);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(65);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(70);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(75);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(80);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(85);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');

    $pdf->SetFont('Arial','',6);
    $pdf->setY(90);
    $pdf->setX(12);
    $pdf->Cell(31,5,' ',1,0,'L');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->Cell(16,5,' ',1,0,'C');
    $pdf->SetFont('Arial','',6);
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(22,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
    $pdf->Cell(24,5,' ',1,0,'C');
        
        $pdf->Output('I', utf8_decode(('Boleta3')));
        exit;
    
            }
}
