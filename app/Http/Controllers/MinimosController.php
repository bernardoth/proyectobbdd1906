<?php

namespace App\Http\Controllers;
use Codedge\Fpdf\Fpdf\FPDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinimosController extends Controller
{
    protected $pdf;
    public function stockminimo()
    {
        $this->pdf = new myPdf();
        $this->pdf->AddPage('P','Letter');
        $this->pdf->AddFont('Helvetica','','helvetica.php');
        $this->pdf->SetFont('Helvetica','',14);
        //$this->pdf->Cell(100);
        $this->pdf->SetXY(15,20);
        $this->pdf->Cell(0, 10, 'PRODUCTOS EN CANTIDADES MINIMAS', 0, 1, 'C');
        $this->pdf->SetXY(15,25);
        $this->pdf->SetFont('Helvetica','',8);
        $this->pdf->Cell(0,10, 'Para uso interno', 0, 1, 'C');
        //$this->pdf->Output('S',$nombre->toDateString(),true);
        //$this->pdf->Rect(15,15,20,18,'D');
        $this->pdf->Image('imagenes/logoHammer.png',18,16,17,16);
        $this->pdf->Rect(185,15,16,16,'D');
        //$this->pdf->Image('imagenes/pk.jpg',191,16,14,14);
        $this->pdf->SetFont('Helvetica','',12);
        $this->pdf->SetXY(15,45);
        $this->pdf->Cell(0,10, 'DETALLE', 0, 1, 'C');
        $header =array(
            'Id',
            'Descripcion',
            'Entradas',
            'Salidas',
            'Stock',
            'Cantidad Min'
        );
        $sizeHeader = array(20,60,25,25,25,30);
        $datos =$this->consulta();
        //dd($datos);
        $this->pdf->SetXY(15,55);
        $this->rowHeader($header,$sizeHeader);
        $this->resetFormat();
        $this->pdf->SetFont('Helvetica','',8);
        $this->pdf->SetXY(15,57);
        $this->pdfTable($datos,$sizeHeader);





        $this->pdf->Output();
        exit;

    }

    public function consulta()
    {
        $lista = DB::select('call prodMin()');
        return $lista;
    }
    public function resetFormat()
    {
        $this->pdf->SetFillColor(224,235,255);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('');
    }
    public function pdfTable($datos,$sizeHeader)
    {
        $this->pdf->SetFillColor(214, 219, 223);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('');
        $this->pdf->SetDrawColor(255);
        $this->pdf->SetLineWidth(.5);
        $total = array();
        $fill = false;
        $contador =62;
        $i=0;
        foreach ($datos as $item)
        {
            $this->pdf->SetXY(15,$contador);
            $this->pdf->Cell($sizeHeader[0],7,$item->id,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[1],7,$item->descripcion,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[2],7,$item->entrada,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[3],7,$item->salida,1,0,'C',$fill);
            $op = $item->stockinicial+$item->entrada-$item->salida;
            $this->pdf->Cell($sizeHeader[4],7,$op,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[5],7,$item->cant_min,1,0,'C',$fill);


            $contador = $contador+7;
            $fill=!$fill;
        }



    }
    public function rowHeader($h,$s)
    {
        $this->pdf->SetFont('Helvetica','',10);
        $this->pdf->SetFillColor(50,50,50);
        $this->pdf->SetTextColor(255);
        $this->pdf->SetDrawColor(150,150,150);
        $this->pdf->SetLineWidth(.4);
        $this->pdf->SetFont('','B');


        for ($i=0;$i<count($s);$i++)
        {
            $this->pdf->Cell($s[$i],7,$h[$i],1,0,'C',true);
        }

    }
}
class myPdf extends FPDF
    {
        function Header()
    {
        //Put the watermark
        $this->SetFont('Arial','B',45);
        $this->SetTextColor(255,192,203);

    }
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetDrawColor(100);
        $this->SetTextColor(150);
        $this->Line(15, 263, 205, 263);
        $this->SetY(-18);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Evite la impresion innecesaria de este documento',0,0,'C');
    }






}
