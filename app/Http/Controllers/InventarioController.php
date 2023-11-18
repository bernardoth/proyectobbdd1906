<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\FPDF;
use Illuminate\Support\Carbon;

use App\Models\Movimiento;
use App\Models\Producto;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    protected $pdf;
    public function inventarioReporte($fechainicio,$fechafin,$id)
    {
        $this->pdf = new myPdf('L','mm',array(210,330));
        $this->pdf->AddPage('L');
        $this->pdf->AddFont('Helvetica','','helvetica.php');
        $this->pdf->SetFont('Helvetica','',16);
        //$this->pdf->Cell(100);
        $this->pdf->Cell(0,20, 'KARDEX PRODUCTO', 0,0 ,'C');
        $this->pdf->Image('imagenes/logoHammer.png',16,16,17,16);
        $this->pdf->SetFont('Helvetica','',10);
        $this->pdf->Text(17,45,'Reporte : ');
        $this->pdf->Text(17,50,'Desde: '.$fechainicio);
        $this->pdf->Text(17,55,'Hasta:  '.$fechafin);

        $datos = $this->consulta($fechainicio,$fechafin,$id);
        $producto = $this->consultaProd($id);
        //dd($datos);
        $this->pdf->Text(70,45,'Articulo : '.$producto->descripcion);
        $this->pdf->Text(70,50,'Cantidad inicial : '.$producto->stockinicial);
        $this->pdf->SetXY(15,60);

        //dd($datos);

        $header =array(
            'FECHA',
            'DETALLE',
            'ENTRADAS',
            'SALIDAS',
            'EXISTENCIAS');
        $sizeHeader = array(35,80,75,75,30);
        $this->rowHeader($header,$sizeHeader);
        $header2 = array(
            'd/m/a',
            '',
            'cantidad',
            'v/unitario',
            'v/total',
            'cantidad',
            'v/unitario',
            'v/total',
            $producto->stockinicial

        );
        $this->pdf->SetXY(15,67);
        $sizeHeader2 = array(35,80,20,25,30,20,25,30,30);
        $this->rowHeader($header2,$sizeHeader2);
        //pruebas
        $col =0;
        $this->resetFormat();
        $fila = 75;
        $this->pdf->SetFillColor(214, 219, 223);
        $fill = false;
        $num = $producto->stockinicial;
        $sumE = [];
        $e=[];
        $s=[];
        $sumS = [];
        $contador =75;
        $this->pdf->SetDrawColor(255);
        $this->pdf->SetLineWidth(.5);
        foreach ($datos as $item)
        {
            $this->pdf->SetXY(15,$fila);
            $this->pdf->Cell($sizeHeader2[0],7,$item->fecha,0,0,'C',$fill);
            $fila=$fila+7;
            if ($item->tipo=='PEDIDO')
            {
                $this->pdf->Cell($sizeHeader2[1],7,
                mb_convert_encoding("\t\t Venta con Doc. Nº Doc",'ISO-8859-1','UTF-8').' '. $item->doc,0,0,'L',$fill);
                $this->pdf->Cell($sizeHeader2[2],7,'',0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[3],7,'',0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[4],7,'',0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[5],7,$item->cantidad,0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[6],7,$item->precioventa,0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[7],7,$item->precioventa*$item->cantidad,0,0,'C',$fill);

                array_push($sumS,($item->precioventa*$item->cantidad));
                $num = $num - $item->cantidad;
                $this->pdf->Cell($sizeHeader2[8],7,$num,0,0,'C',$fill);
            }
            //mb_convert_encoding('Nº Doc','ISO-8859-1','UTF-8')
            if ($item->tipo=='COMPRA')
            {
                $this->pdf->Cell($sizeHeader2[1],7,
                mb_convert_encoding("\t\t Compra con Doc. Nº Doc",'ISO-8859-1','UTF-8').' '. $item->doc,0,0,'L',$fill);

                $this->pdf->Cell($sizeHeader2[2],7,$item->cantidad,0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[3],7,$item->preciocompra,0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[4],7,$item->preciocompra*$item->cantidad,0,0,'C',$fill);
                array_push($sumE,($item->preciocompra*$item->cantidad));
                $this->pdf->Cell($sizeHeader2[5],7,'',0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[6],7,'',0,0,'C',$fill);
                $this->pdf->Cell($sizeHeader2[7],7,'',0,0,'C',$fill);
                $num = $num + $item->cantidad;
                $this->pdf->Cell($sizeHeader2[8],7,$num,0,0,'C',$fill);
            }
            $fill = !$fill;
            $contador= $contador+6;



        }
        $this->pdf->SetDrawColor(155);
        $this->pdf->Line(15,$contador+5,310,$contador+5);
        //$this->pdf->Text(150,$contador+10,'Total: ');
        $this->pdf->SetDrawColor(255);

        $this->pdf->SetXY(15,$contador+7);
        $this->pdf->Cell($sizeHeader2[0],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[1],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[2],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[3],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[4],7,array_sum($sumE),0,0,'C',true);
        $this->pdf->Cell($sizeHeader2[5],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[6],7,'',0,0,'C',false);
        $this->pdf->Cell($sizeHeader2[7],7,array_sum($sumS),0,0,'C',true);



        //




        $this->pdf->Output();
        exit;
    }

    // funciones
    public function consulta($fechainicio,$fechafin,$id)
    {
       $lista =  DB::select('call prodInventario(?,?,?)',array($id,$fechainicio,$fechafin));
       //dd($lista);

       return $lista;
    }
    public function consultaProd($id)
    {
        return $producto =Producto::find($id);

    }
    public function rowHeader($h,$s)
    {
        $this->pdf->SetFont('Helvetica','',9);
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
        $this->SetDrawColor(0);
        $this->Line(15, 195, 320, 195);
        $this->SetY(-18);
        // Arial italic 8
        $this->SetTextColor(0);
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Evite la impresion innecesaria de este documento',0,0,'C');
    }


}
