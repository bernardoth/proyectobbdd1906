<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\FPDF;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Venta;
use App\Models\Cliente;

class ExportController extends Controller
{
    //
    protected $pdf;
    public function miReporte($id)
    {   $fecha=  Carbon::now();
        $fecha2 = $fecha->format('d-m-Y');
        $venta=Venta::find($id);
        $cliente = Cliente::find($venta->cliente_id);
        $v=$venta->estado;
        $prodjson = $venta->productos;
        $prod = json_decode($prodjson);
        $this->pdf = new myPdf();
        $this->pdf->AddPage('P','Letter');
        $this->pdf->AddFont('Helvetica','','helvetica.php');
        $this->pdf->SetFont('Helvetica','',16);
        //$this->pdf->Cell(100);
        if ($v=='PEDIDO') {
            $this->pdf->Cell(0, 30, 'NOTA DE VENTA', 'T', 1, 'C');
        }
        else {
            $this->pdf->Cell(0, 30, 'PROFORMA', 'T', 1, 'C');
        }

        $this->pdf->SetFont('Helvetica','',10);
        $this->pdf->Cell(0, -20, 'informacion adicional', 0, 1, 'C');
        //$this->pdf->Output('S',$nombre->toDateString(),true);
        //$this->pdf->Rect(15,15,20,18,'D');
        $this->pdf->Image('imagenes/logoHammer.png',16,16,17,16);
        $this->pdf->Rect(190,15,16,16,'D');
        $this->pdf->Image('imagenes/pk.jpg',191,16,14,14);
        $this->pdf->Text(15,43,'Fecha: '.$fecha2);
        $this->pdf->Text(15,50,'Nombre: '.$cliente->nombres . ' '. $cliente->apellidos);
        //$this->pdf->Text(95,50,'Apellidos: ');
        $this->pdf->Text(150,50,'CI / NIT: '.$cliente->ci);
        $this->pdf->SetFont('Helvetica','',8);
        $this->pdf->Text(180,35,$fecha);
        $this->pdf->SetFont('Helvetica','',12);
        $this->pdf->Cell(0, 90, 'DETALLE', 0, 1, 'C');

        // datos venta
        $header = array('Cant','Descripcion','Precio U.','SubTotal');
        $sizehead = array(20,115,25,25);
        $this->rowHeader($header,$sizehead);
        //$d=
        //$this->pdfTable($prod,$sizehead);
        $this->resetFormat();


        $this->pdfTable($prodjson,$sizehead);






        $this->pdf->Output();
        exit;
        //readfile($nombre->toDateString());
        //return view('livewire.report.informe');
    }

    public function rowHeader($h,$s)
    {
        $this->pdf->SetFont('Helvetica','',10);
        $this->pdf->SetFillColor(50,50,50);
        $this->pdf->SetTextColor(255);
        $this->pdf->SetDrawColor(150,150,150);
        $this->pdf->SetLineWidth(.4);
        $this->pdf->SetFont('','B');
        $this->pdf->SetXY(15,70);

        for ($i=0;$i<count($s);$i++)
        {
            $this->pdf->Cell($s[$i],7,$h[$i],1,0,'C',true);
        }

    }
    public function pdfTable($data,$s)
    {

        $this->pdf->SetFillColor(214, 219, 223);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('');
        $this->pdf->SetDrawColor(255);
        $this->pdf->SetLineWidth(.5);
        $fill=false;
        $total=array();
        $e = 7;
        for ($i=0; $i < count($data); $i++) {

            $this->pdf->SetXY(15,70+$e);
            $a=$data[$i]['pivot']['cantidad'];
            $this->pdf->Cell($s[0],7,$a,1,0,'C',$fill);
            $this->pdf->Cell($s[1],7,$data[$i]['descripcion'],1,0,'L',$fill);
            $b=$data[$i]['pivot']['precioventa'];
            $this->pdf->Cell($s[2],7,number_format($b,2,'.',' '),1,0,'C',$fill);
            $c=(float)$a*$b;
            $this->pdf->Cell($s[3],7,number_format($c,2,'.',' '),1,0,'R',$fill);
            //$this->pdf->Ln();
            $e=$e+7;
            array_push($total,$c);
            $fill=!$fill;

        }
        //$this->pdf->Ln();

        // Closing line
        //$this->resetFormat();
        $this->pdf->SetDrawColor(150);
        $this->pdf->Line(15,$e+72,200,$e+70);
        $this->pdf->SetXY(15,$e+73);
        $this->pdf->SetDrawColor(255);
        $this->pdf->Cell($s[0],7,'',1,0,'C',false);
        $this->pdf->Cell($s[1],7,'',1,0,'C',false);

        $this->pdf->Cell($s[2],7,'Total: ',1,0,'C',true);
        $this->pdf->Cell($s[3],7,number_format(array_sum($total),2,'.',' '),1,0,'R',true);


    }

    public function resetFormat()
    {
        $this->pdf->SetFillColor(224,235,255);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('');
    }




}
class myPdf extends FPDF
{
    function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Evite la impresion innecesaria de este documento',0,0,'C');
}
}

