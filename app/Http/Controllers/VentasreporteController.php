<?php

namespace App\Http\Controllers;

use App\Http\Controllers\myPdf as ControllersMyPdf;
use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\FPDF;
use Illuminate\Support\Carbon;
use App\Models\Movimiento;
use App\Models\Persona;
use Illuminate\Http\Request;

class VentasreporteController extends Controller
{
    //
    protected $pdf;
    public function reportesVentas($fechainicio,$fechafin)
    {


        $this->pdf = new myPdf();
        $this->pdf->AddPage('P','Letter');
        $this->pdf->AddFont('Helvetica','','helvetica.php');
        $this->pdf->SetFont('Helvetica','',14);
        //$this->pdf->Cell(100);
        $this->pdf->Cell(0, 30, 'REPORTE DE VENTA', 'T', 1, 'C');

        $this->pdf->SetFont('Helvetica','',8);
        $this->pdf->Cell(0,-18, 'Para uso interno', 0, 1, 'C');
        //$this->pdf->Output('S',$nombre->toDateString(),true);
        //$this->pdf->Rect(15,15,20,18,'D');
        $this->pdf->Image('imagenes/logoHammer.png',16,16,17,16);
        $this->pdf->Rect(190,15,16,16,'D');
        //$this->pdf->Image('imagenes/pk.jpg',191,16,14,14);
        $this->pdf->SetFont('Helvetica','',14);
        $this->pdf->Cell(0, 90, 'DETALLE', 0, 1, 'C');
        $this->pdf->SetFont('Helvetica','',8);
        $this->pdf->Text(17,45,'Reporte : ');
        $this->pdf->Text(17,50,'Desde: '.$fechainicio);
        $this->pdf->Text(17,55,'Hasta:  '.$fechafin);
        $this->pdf->Text(100,45,'Para el usuario:  ');
        $this->pdf->Text(100,50,'Generado en:  '.Carbon::now());
        $header =array(
            mb_convert_encoding('Nº Doc','ISO-8859-1','UTF-8'),
            'Cliente',
            'Fecha',
            'Total');
        $sizeHeader = array(30,80,35,35);
        $this->rowHeader($header,$sizeHeader);
        $this->resetFormat();

        //************************* */

        $datos = $this->consulta($fechainicio,$fechafin);


        $this->pdfTable($datos,$sizeHeader);

        //******************************** */
        $this->pdf->Output();
        exit;
    }

    public function consulta($a,$b)
    {
        $lista = Movimiento::select('movimientos.id','movimientos.estado','movimientos.persona_id','movimientos.updated_at',
        'personas.nombres','precioventa','cantidad',DB::raw('precioventa * cantidad as total'))
        ->join('personas','movimientos.persona_id','=','personas.id')
        //->where('nombres','like','%'.$this->search.'%')
        ->join('movimiento_producto','movimientos.id','=','movimiento_producto.movimiento_id')
        ->whereDate('movimientos.updated_at','>=',$a)
        ->whereDate('movimientos.updated_at','<=',$b)
        ->where('estado','=','PEDIDO')
        //->whereBetween('ventas.updated_at',[$this->fechainicio,$this->fechafin])
        ->groupBy('movimientos.id')->get();
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
        $contador =77;
        $i=0;
        foreach ($datos as $item)
        {
            $this->pdf->SetXY(15,$contador);
            $this->pdf->Cell($sizeHeader[0],7,$item->id,1,0,'C',$fill);

            $this->pdf->Cell($sizeHeader[1],7,$item->nombres,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[2],7,$item->updated_at,1,0,'C',$fill);
            $this->pdf->Cell($sizeHeader[3],7,number_format($item->total,2,'.',' '),1,0,'R',$fill);

            /*
            $this->pdf->SetXY(35,$contador);
            $this->pdf->Cell($contador,8,$item->updated_at,1,0,'C',false);
            $this->pdf->SetXY(35,$contador);
            $this->pdf->Cell($contador,8,$item->total,1,0,'C',false);
            */

            $contador=$contador +7;
            $i = $i +1;
            $fill = !$fill;
            array_push($total,(float)$item->total);
        }
        $this->pdf->SetDrawColor(155);
        $this->pdf->Line(15,$contador+1,195,$contador+1);
        //$this->pdf->Text(150,$contador+10,'Total: ');
        $this->pdf->SetDrawColor(255);
        $this->pdf->SetXY(15,$contador+5);
        $this->pdf->Cell($sizeHeader[0],7,'',1,0,'C',false);
        $this->pdf->Cell($sizeHeader[1],7,'',1,0,'C',false);
        $this->pdf->Cell($sizeHeader[2],7,'Total: ',1,0,'R',true);
        $this->pdf->Cell($sizeHeader[3],7,number_format(array_sum($total),2,'.',' '),1,0,'R',true);


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
}

class myPdf extends FPDF
    {
        function Header()
    {
        //Put the watermark
        $this->SetFont('Arial','B',45);
        $this->SetTextColor(255,192,203);
        $this->RotatedText(35,220,'PARA USO INTERNO',45);
    }
        function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetDrawColor(0);
        $this->Line(15, 265, 210, 265);
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Evite la impresion innecesaria de este documento',0,0,'C');
    }
    function RotatedText($x, $y, $txt, $angle)
    {
        //Text rotated around its origin
        $this->Rotate($angle,$x,$y);
        $this->Text($x,$y,$txt);
        $this->Rotate(0);
    }
    var $angle=0;

    function Rotate($angle,$x=-1,$y=-1)
    {
        if($x==-1)
            $x=$this->x;
        if($y==-1)
            $y=$this->y;
        if($this->angle!=0)
            $this->_out('Q');
        $this->angle=$angle;
        if($angle!=0)
        {
            $angle*=M_PI/180;
            $c=cos($angle);
            $s=sin($angle);
            $cx=$x*$this->k;
            $cy=($this->h-$y)*$this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
        }
    }

    function _endpage()
    {
        if($this->angle!=0)
        {
            $this->angle=0;
            $this->_out('Q');
        }
        parent::_endpage();
    }

}

