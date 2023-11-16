<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {





        Producto::create([
            'codigo' => ' fd35r',
            'descripcion'=>'pernos',
			'preciocompra'=>'62.07',
			'precioventa'=>'155.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46920',
            'descripcion'=>'ABRAZADERA DE UÑA 1/2 BOLSA CON 10 PZA VOLTECK',
			'preciocompra'=>'53.47',
			'precioventa'=>'133.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46921',
            'descripcion'=>'ABRAZADERA DE UÑA 3/4 VOLTECH 10 PZS',
			'preciocompra'=>'27.99',
			'precioventa'=>'69.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46922',
            'descripcion'=>'ABRAZADERA DE UÑA 1" VOLTECK BOLSA C/10 PZS',
			'preciocompra'=>'79.47',
			'precioventa'=>'198.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44230',
            'descripcion'=>'ABRAZADERA NO. 4 10-16MM FIERO 10 PZS MI',
			'preciocompra'=>'28.31',
			'precioventa'=>'70.77499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44232',
            'descripcion'=>'ABRAZADERA NO. 4 3/8-5/8" REFOR BOLSA 10',
			'preciocompra'=>'71.74',
			'precioventa'=>'179.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44233',
            'descripcion'=>'ABRAZADERA NO. 6 1/2-3/4 BOLSA 10 PZS',
			'preciocompra'=>'21.3',
			'precioventa'=>'53.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44231',
            'descripcion'=>'ABRAZADERA NO. 6 1/2-3/4" BOLSA C/10 PZS',
			'preciocompra'=>'46.68',
			'precioventa'=>'116.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44234',
            'descripcion'=>'ABRAZADERA NO. 8 5/8-7/8" BOLSA 10 PZS',
			'preciocompra'=>'74.0',
			'precioventa'=>'185.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44235',
            'descripcion'=>'ABRAZADERA NO.10 19-27MM FIERO 10 P AB-1',
			'preciocompra'=>'14.8',
			'precioventa'=>'37.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44236',
            'descripcion'=>'ABRAZADERA NO.12 5/8-1-1/4" BOLSA 10 PZS',
			'preciocompra'=>'59.92',
			'precioventa'=>'149.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44237',
            'descripcion'=>'ABRAZADERA NO.16 19-38MM FIERO 10 PB',
			'preciocompra'=>'40.39',
			'precioventa'=>'100.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44238',
            'descripcion'=>'ABRAZADERA NO.20 3/4- 1-3/4" BOLSA 10 PZ',
			'preciocompra'=>'32.09',
			'precioventa'=>'80.22500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44239',
            'descripcion'=>'ABRAZADERA NO.24 1-1/4-2" BOLSA 10 PZS',
			'preciocompra'=>'56.85',
			'precioventa'=>'142.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44240',
            'descripcion'=>'ABRAZADERA NO.28 1-1/2 - 2-1/4 BOLSA 10P',
			'preciocompra'=>'73.81',
			'precioventa'=>'184.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44243',
            'descripcion'=>'ABRAZADERA NO.40 57-76MM FIERO 5 PB',
			'preciocompra'=>'70.17',
			'precioventa'=>'175.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44246',
            'descripcion'=>'ABRAZADERA NO.52 72-95MM FIERO 5 PZSB',
			'preciocompra'=>'76.66',
			'precioventa'=>'191.64999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44250',
            'descripcion'=>'ABRAZADERA NO.72 105-127MM FIERO 5 PZS B',
			'preciocompra'=>'79.91',
			'precioventa'=>'199.77499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46923',
            'descripcion'=>'ABRAZADERA OMEGA 1/2 VOLTECK BOLSA C/10 PZA',
			'preciocompra'=>'39.56',
			'precioventa'=>'98.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46924',
            'descripcion'=>'ABRAZADERA OMEGA 3/4" VOLTECK C/10 PZA',
			'preciocompra'=>'55.38',
			'precioventa'=>'138.45000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46925',
            'descripcion'=>'ABRAZADERA OMEGA1" VOLTECKBOLSA CON 10 PZS',
			'preciocompra'=>'17.59',
			'precioventa'=>'43.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '102304',
            'descripcion'=>'ABRAZADERA OMEGA 1 1/4" AKSI',
			'preciocompra'=>'22.84',
			'precioventa'=>'57.1',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46030',
            'descripcion'=>'ABRAZADERA OMEGA 1 1/4" VOLTECH 5 PZS',
			'preciocompra'=>'25.49',
			'precioventa'=>'63.724999999999994',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '46928',
            'descripcion'=>'ABRAZADERA OMEGA 3" BOLSA CON 5 PZA VOLTECK',
			'preciocompra'=>'43.67',
			'precioventa'=>'109.17500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => ' ABR-T8 PP ',
            'descripcion'=>'ABRAZADERA PARA TUBO LED T8 POLIPROPILENO',
			'preciocompra'=>'70.54',
			'precioventa'=>'176.35000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '57045',
            'descripcion'=>'ABSORBEDOR DE HUMEDAD 300GR KLINTEK',
			'preciocompra'=>'36.18',
			'precioventa'=>'90.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '191558',
            'descripcion'=>'ACCESORIO P/MULTIPRO AKSI',
			'preciocompra'=>'27.44',
			'precioventa'=>'68.60000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '290147',
            'descripcion'=>'ACCESORIO P/TALADRO ANGULO 90 Y 6 PUNTAS',
			'preciocompra'=>'62.86',
			'precioventa'=>'157.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10',
            'descripcion'=>'ACCESORIO P/TALADRO BOLSA',
			'preciocompra'=>'12.28',
			'precioventa'=>'30.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190194',
            'descripcion'=>'ACCESORIO P/TALADRO CARDA Y DAPTADOR',
			'preciocompra'=>'49.48',
			'precioventa'=>'123.69999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190196',
            'descripcion'=>'ACCESORIO P/TALADRO DISCO C/METAL JGO',
			'preciocompra'=>'39.62',
			'precioventa'=>'99.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '190193',
            'descripcion'=>'ACCESORIO P/TALADRO SIERRA JGO 102 MM',
			'preciocompra'=>'12.77',
			'precioventa'=>'31.924999999999997',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '306411',
            'descripcion'=>'ACCESORIOS P/AIRE 14 PZS MAX TOOLS',
			'preciocompra'=>'30.56',
			'precioventa'=>'76.39999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' L4927 ',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS LION TOOLS',
			'preciocompra'=>'5.33',
			'precioventa'=>'13.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '306412',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS MAX-TOOLS',
			'preciocompra'=>'14.84',
			'precioventa'=>'37.1',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19022',
            'descripcion'=>'ACCESORIOS P/AIRE 17 PZS TRUPER JAN-17',
			'preciocompra'=>'51.37',
			'precioventa'=>'128.42499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' L4920 ',
            'descripcion'=>'ACCESORIOS P/AIRE 18 PZS LION TOOLS',
			'preciocompra'=>'16.99',
			'precioventa'=>'42.474999999999994',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19076',
            'descripcion'=>'ACCESORIOS P/AIRE TRUPER 2 VAL INFLA ADAPTADOR',
			'preciocompra'=>'59.08',
			'precioventa'=>'147.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '49255',
            'descripcion'=>'ACCESORIOS P/BA¥O FOSET 5 PZS BASIC',
			'preciocompra'=>'16.05',
			'precioventa'=>'40.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '16285',
            'descripcion'=>'ACCESORIOS P/MOTOTOOL TRUPER KIT 41 PZS*',
			'preciocompra'=>'39.27',
			'precioventa'=>'98.17500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '290103',
            'descripcion'=>'ACCESORIOS PARA TALADRO DISCOS 1/8" DIAM',
			'preciocompra'=>'27.33',
			'precioventa'=>'68.32499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '372',
            'descripcion'=>'ACEITE 3 EN 1 30 MIL. CHICO *',
			'preciocompra'=>'25.38',
			'precioventa'=>'63.449999999999996',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '628',
            'descripcion'=>'ACEITE 3 EN 1 90 MIL GRANDE *',
			'preciocompra'=>'40.8',
			'precioventa'=>'102.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '119581',
            'descripcion'=>'ACEITE AKSI P/MOTOR 2 TIEMPOS CHICO 120 MIL.',
			'preciocompra'=>'67.87',
			'precioventa'=>'169.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '119582',
            'descripcion'=>'ACEITE AKSI P/MOTOR 2 TIEMPOS GRANDE 475 MIL',
			'preciocompra'=>'69.59',
			'precioventa'=>'173.97500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '4426',
            'descripcion'=>'ACEITE LUBRICANTE MOL *',
			'preciocompra'=>'24.4',
			'precioventa'=>'61.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '16711',
            'descripcion'=>'ACEITE LUBRICANTE TRUPER 30 MIL CHICO A-31-30',
			'preciocompra'=>'36.25',
			'precioventa'=>'90.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '16712',
            'descripcion'=>'ACEITE LUBRICANTE TRUPER 90 MIL GRANDE A-31-90',
			'preciocompra'=>'19.6',
			'precioventa'=>'49.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '2554',
            'descripcion'=>'ACEITE ROJO 240 ML. *',
			'preciocompra'=>'47.39',
			'precioventa'=>'118.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' OC125 ',
            'descripcion'=>'ACEITERA 125CC MAR-RAM FLEXIBLE',
			'preciocompra'=>'13.78',
			'precioventa'=>'34.449999999999996',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' OC500 ',
            'descripcion'=>'ACEITERA 500CC MAR-RAM FLEXIBLE',
			'preciocompra'=>'29.05',
			'precioventa'=>'72.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' AM200MR ',
            'descripcion'=>'ACEITERA MAR-RAM 200CC PROFESIONAL',
			'preciocompra'=>'63.44',
			'precioventa'=>'158.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => ' AM300MR ',
            'descripcion'=>'ACEITERA MAR-RAM 300CC PROFESIONAL',
			'preciocompra'=>'15.5',
			'precioventa'=>'38.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '14870',
            'descripcion'=>'ACEITERA TRUPER FLEXIBLE 180MI ACEF-180*',
			'preciocompra'=>'72.09',
			'precioventa'=>'180.22500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '2847',
            'descripcion'=>'ACIDO MURIATICO 1 LTS .',
			'preciocompra'=>'19.22',
			'precioventa'=>'48.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '48485',
            'descripcion'=>'ACOPLADOR COAXIAL EXTERIOR VOLTECH',
			'preciocompra'=>'46.2',
			'precioventa'=>'115.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 01-2010 ',
            'descripcion'=>'ACOPLADOR EXTERIOR MITZU',
			'preciocompra'=>'46.92',
			'precioventa'=>'117.30000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '854',
            'descripcion'=>'ADAPTADOR 3 PZS MAR-RAM',
			'preciocompra'=>'31.6',
			'precioventa'=>'79.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' IA03-F',
            'descripcion'=>'ADAPTADOR 3 PZS MAR-RAM IMPACTO',
			'preciocompra'=>'23.03',
			'precioventa'=>'57.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DR3412MR',
            'descripcion'=>'ADAPTADOR 3/4 A 1/2 MAR-RAM REDUCCION',
			'preciocompra'=>'57.45',
			'precioventa'=>'143.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49307',
            'descripcion'=>'ADAPTADOR FOSET 1" MACHOBOMBA POLIDUT',
			'preciocompra'=>'65.3',
			'precioventa'=>'163.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49306',
            'descripcion'=>'ADAPTADOR FOSET 3/4" MACHO BOMBA POLIDU',
			'preciocompra'=>'32.2',
			'precioventa'=>'80.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DR2MR ',
            'descripcion'=>'ADAPTADOR MAR-RAM 2 PZS 3/8A1/4 1/2A3/8',
			'preciocompra'=>'52.22',
			'precioventa'=>'130.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '290145',
            'descripcion'=>'ADAPTADOR P/TALADRO 1/2 OBI',
			'preciocompra'=>'58.97',
			'precioventa'=>'147.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '20050',
            'descripcion'=>'ADAPTADOR PRETUL Y P/MANGUERA AD-2P *',
			'preciocompra'=>'12.62',
			'precioventa'=>'31.549999999999997',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342263',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 2 SANELEC 4226',
			'preciocompra'=>'38.5',
			'precioventa'=>'96.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342256',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 2 SANELEC GRANE',
			'preciocompra'=>'30.8',
			'precioventa'=>'77.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342232',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 3 SANELEC 4223',
			'preciocompra'=>'60.66',
			'precioventa'=>'151.64999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342249',
            'descripcion'=>'ADAPTADOR TELEFONICO 1 A 3 SANELEC BLIST',
			'preciocompra'=>'20.96',
			'precioventa'=>'52.400000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46074',
            'descripcion'=>'ADAPTADOR TELEFONICO 2 A 1 VOLTECH',
			'preciocompra'=>'33.54',
			'precioventa'=>'83.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342270',
            'descripcion'=>'ADAPTADOR TELEFONICO P/EXTEN DE 2 LINEAS',
			'preciocompra'=>'45.26',
			'precioventa'=>'113.14999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342287',
            'descripcion'=>'ADAPTADOR TELEFONICO P/EXTEN P/2 LINEAS',
			'preciocompra'=>'41.95',
			'precioventa'=>'104.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '10372',
            'descripcion'=>'ADAPTADOR TRUPER P/2 Y MANGUERAS AD-2 AL',
			'preciocompra'=>'13.77',
			'precioventa'=>'34.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '43',
            'descripcion'=>'ADORNO DE DELFINES C/BASE FPD206-C',
			'preciocompra'=>'62.78',
			'precioventa'=>'156.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' L6782 ',
            'descripcion'=>'AEROGRAFO LION TOOLS C/ACCESORIOS',
			'preciocompra'=>'68.31',
			'precioventa'=>'170.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14016',
            'descripcion'=>'AFILADOR DE CUCHILLOS TRUPER',
			'preciocompra'=>'60.52',
			'precioventa'=>'151.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' L8341 ',
            'descripcion'=>'AFILADOR DE CUCHILLOS YNAVAJAS LION TOOLS',
			'preciocompra'=>'25.97',
			'precioventa'=>'64.925',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' JA4MR ',
            'descripcion'=>'AFINACION 4 PZS 1/2 MAR-RAM PROFESIONAL',
			'preciocompra'=>'71.05',
			'precioventa'=>'177.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' JA4MR-F ',
            'descripcion'=>'AFINACION 4 PZS FLEXIBLE MAR-RAM 1/2 MAT',
			'preciocompra'=>'35.0',
			'precioventa'=>'87.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '365026',
            'descripcion'=>'AFLOJATODO LUBRICANTE 110 G SANTUL 6502',
			'preciocompra'=>'66.26',
			'precioventa'=>'165.65',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13468',
            'descripcion'=>'AFLOJATODO LUBRICANTE 110 MIL TRUPERNUEVO',
			'preciocompra'=>'19.18',
			'precioventa'=>'47.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '365033',
            'descripcion'=>'AFLOJATODO LUBRICANTE 235 G SANTUL 6503',
			'preciocompra'=>'76.31',
			'precioventa'=>'190.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13469',
            'descripcion'=>'AFLOJATODO LUBRICANTE 235 MIL TRUPER NUEVO',
			'preciocompra'=>'39.67',
			'precioventa'=>'99.17500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '365040',
            'descripcion'=>'AFLOJATODO LUBRICANTE 400 G SANTUL 6504',
			'preciocompra'=>'75.35',
			'precioventa'=>'188.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '13471',
            'descripcion'=>'AFLOJATODO LUBRICANTE 400 MIL TRUPER NUEVO',
			'preciocompra'=>'54.84',
			'precioventa'=>'137.10000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '1268',
            'descripcion'=>'AFLOJATODO WD-40 5.5 ONZAS',
			'preciocompra'=>'40.45',
			'precioventa'=>'101.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '8',
            'descripcion'=>'AFLOJATODO WD-40 8 ONZAS """""OJO""""',
			'preciocompra'=>'68.78',
			'precioventa'=>'171.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '20',
            'descripcion'=>'AIRE COMPRIMIDO AIR FLAM 514 MIL AMARILL',
			'preciocompra'=>'21.31',
			'precioventa'=>'53.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '532',
            'descripcion'=>'ALAMBRE 10 POR METRO',
			'preciocompra'=>'29.9',
			'precioventa'=>'74.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '16',
            'descripcion'=>'ALAMBRE 8POR METRO',
			'preciocompra'=>'38.08',
			'precioventa'=>'95.19999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44884',
            'descripcion'=>'ALAMBRE DE PUAS CALI 15 ROLLO DE 100MTSA',
			'preciocompra'=>'45.65',
			'precioventa'=>'114.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '117053',
            'descripcion'=>'ALAMBRE DE PUAS CALIBRE 15.5 360MTS AKSI',
			'preciocompra'=>'12.62',
			'precioventa'=>'31.549999999999997',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44465',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 12.5 FIERO',
			'preciocompra'=>'28.42',
			'precioventa'=>'71.05000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44466',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 14.5 FIERO',
			'preciocompra'=>'50.78',
			'precioventa'=>'126.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44467',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 16 FIERO',
			'preciocompra'=>'78.8',
			'precioventa'=>'197.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44468',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 18 FIERO',
			'preciocompra'=>'62.58',
			'precioventa'=>'156.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44469',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 20 FIERO',
			'preciocompra'=>'71.84',
			'precioventa'=>'179.60000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44470',
            'descripcion'=>'ALAMBRE GALVANIZADO CALIBRE 22 FIERO',
			'preciocompra'=>'11.83',
			'precioventa'=>'29.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '15',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.16',
			'preciocompra'=>'70.92',
			'precioventa'=>'177.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '16',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.18',
			'preciocompra'=>'54.91',
			'precioventa'=>'137.27499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '17',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.20',
			'preciocompra'=>'64.38',
			'precioventa'=>'160.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '18',
            'descripcion'=>'ALAMBRE GALVANIZADO TLAPALERO NO.22',
			'preciocompra'=>'16.65',
			'precioventa'=>'41.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '35',
            'descripcion'=>'ALAMBRE NO.10',
			'preciocompra'=>'34.89',
			'precioventa'=>'87.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '36',
            'descripcion'=>'ALAMBRE NO.12',
			'preciocompra'=>'40.64',
			'precioventa'=>'101.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '37',
            'descripcion'=>'ALAMBRE NO.14',
			'preciocompra'=>'71.92',
			'precioventa'=>'179.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '38',
            'descripcion'=>'ALAMBRE NO.8',
			'preciocompra'=>'33.0',
			'precioventa'=>'82.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44458',
            'descripcion'=>'ALAMBRE RECOCIDO POR KILO',
			'preciocompra'=>'15.1',
			'precioventa'=>'37.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44457',
            'descripcion'=>'ALAMBRE RECOCIDO POR ROLLO DE 20 CAL16',
			'preciocompra'=>'26.62',
			'precioventa'=>'66.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '346025',
            'descripcion'=>'ALARMA SANTUL PUERTAS Y VENTANAS CONTRO REMOTO 460',
			'preciocompra'=>'54.62',
			'precioventa'=>'136.54999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44989',
            'descripcion'=>'ALCAYATA ROSCADA 21X80 MM 12 PZS',
			'preciocompra'=>'70.06',
			'precioventa'=>'175.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44991',
            'descripcion'=>'ALCAYATA ROSCADA 22X100 MM 12 PZS',
			'preciocompra'=>'34.99',
			'precioventa'=>'87.47500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44990',
            'descripcion'=>'ALCAYATA ROSCADA 22X90 MM 12 PZS',
			'preciocompra'=>'51.28',
			'precioventa'=>'128.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44992',
            'descripcion'=>'ALCAYATA ROSCADA 23X110 MM 12 PZS',
			'preciocompra'=>'49.99',
			'precioventa'=>'124.97500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '138',
            'descripcion'=>'ALCAYATA VARILLA 13 CTM',
			'preciocompra'=>'32.57',
			'precioventa'=>'81.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '191',
            'descripcion'=>'ALCAYATA VARILLA 16 CTM',
			'preciocompra'=>'35.5',
			'precioventa'=>'88.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '281',
            'descripcion'=>'ALCAYATA VARILLA 18 CTM',
			'preciocompra'=>'59.52',
			'precioventa'=>'148.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '592',
            'descripcion'=>'ALCAYATA VARILLA DE OJO CHICA 3/8',
			'preciocompra'=>'28.76',
			'precioventa'=>'71.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '918',
            'descripcion'=>'ALCAYATA VARILLA DE OJO GRANDE',
			'preciocompra'=>'22.4',
			'precioventa'=>'56.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '816',
            'descripcion'=>'ALCAYATA VARILLA DE OJO MEDIANA 1/2',
			'preciocompra'=>'19.44',
			'precioventa'=>'48.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '985',
            'descripcion'=>'ALCOHOL EN GEL 250ML CARNU',
			'preciocompra'=>'35.87',
			'precioventa'=>'89.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '50',
            'descripcion'=>'ALEZNA FINA ECONOMICA *E014',
			'preciocompra'=>'73.52',
			'precioventa'=>'183.79999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '66261079600',
            'descripcion'=>'ALMOHADILLA NORTON VERDE MUY FINO 152X22',
			'preciocompra'=>'42.91',
			'precioventa'=>'107.27499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '465',
            'descripcion'=>'AMARRADOR DE VARILLA',
			'preciocompra'=>'43.15',
			'precioventa'=>'107.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '367',
            'descripcion'=>'AMARRADOR REDONDO',
			'preciocompra'=>'45.24',
			'precioventa'=>'113.10000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => ' 02-2007 ',
            'descripcion'=>'ANTENA C/B C/2 ARI COAX MITZ02-2007',
			'preciocompra'=>'24.33',
			'precioventa'=>'60.824999999999996',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AIN21 ',
            'descripcion'=>'ANTENA INTERIOR PLANA HDTV 21" SURTEK',
			'preciocompra'=>'53.27',
			'precioventa'=>'133.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SALP',
            'descripcion'=>'ANTENA MAGA¥A A-A13 ALPHA',
			'preciocompra'=>'19.85',
			'precioventa'=>'49.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' S-OMEGA ',
            'descripcion'=>'ANTENA MAGA¥A A-A14 OMEGA ALETA CURVA',
			'preciocompra'=>'52.97',
			'precioventa'=>'132.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SORO',
            'descripcion'=>'ANTENA MAGA¥A A-ORO DURA ORO',
			'preciocompra'=>'62.23',
			'precioventa'=>'155.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' UV14',
            'descripcion'=>'ANTENA MAGA¥A A-UV14-MX 28 ELEMENTOS',
			'preciocompra'=>'69.45',
			'precioventa'=>'173.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341969',
            'descripcion'=>'ANTENA SANELEC GIRATORIA CLASICA CONTROL',
			'preciocompra'=>'68.9',
			'precioventa'=>'172.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341822',
            'descripcion'=>'ANTENA SANELEC HD TV INTERIOR 12" NEGRA',
			'preciocompra'=>'70.61',
			'precioventa'=>'176.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '341907',
            'descripcion'=>'ANTENA SANELEC PLANA MINI ULTRA DELGADA',
			'preciocompra'=>'10.91',
			'precioventa'=>'27.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AN-4002 ',
            'descripcion'=>'ANTENA T/PANA FUSSION C/COAXIAL Y PLANO',
			'preciocompra'=>'41.9',
			'precioventa'=>'104.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AN-4000A',
            'descripcion'=>'ANTENA T/PANA FUSSION C/PLANO',
			'preciocompra'=>'58.62',
			'precioventa'=>'146.54999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A-AT',
            'descripcion'=>'ANTENA TIPO T LUMIHDIML3MTS DE CABLE POLIETILE',
			'preciocompra'=>'23.01',
			'precioventa'=>'57.525000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '57',
            'descripcion'=>'ANTENA TIPO T PVC LUMIHD CHICA C/ABLE',
			'preciocompra'=>'59.95',
			'precioventa'=>'149.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '67',
            'descripcion'=>'ANTENA TIPO T PVC LUMIHD GRANDE C/CABLE',
			'preciocompra'=>'17.44',
			'precioventa'=>'43.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '375827',
            'descripcion'=>'ANTORCHA RUSTICA SANTUL BAMBU 7582',
			'preciocompra'=>'64.26',
			'precioventa'=>'160.65',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46444',
            'descripcion'=>'APAGADOR COLA DE RATA VOLTECH',
			'preciocompra'=>'9.84',
			'precioventa'=>'24.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46001',
            'descripcion'=>'APAGADOR CON CONTACTO VOLTECK',
			'preciocompra'=>'66.95',
			'precioventa'=>'167.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '117213',
            'descripcion'=>'APAGADOR DE PASO AKSI',
			'preciocompra'=>'71.3',
			'precioventa'=>'178.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2355',
            'descripcion'=>'APAGADOR DE PASO ROYER 227',
			'preciocompra'=>'79.71',
			'precioventa'=>'199.27499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342959',
            'descripcion'=>'APAGADOR DE PASO SANELEC',
			'preciocompra'=>'48.87',
			'precioventa'=>'122.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1084',
            'descripcion'=>'APAGADOR ESCALERA MODUS 10A *',
			'preciocompra'=>'33.69',
			'precioventa'=>'84.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4457',
            'descripcion'=>'APAGADOR ESCALERA QUINZI¥O *',
			'preciocompra'=>'63.91',
			'precioventa'=>'159.77499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2137',
            'descripcion'=>'APAGADOR ESCALERA ROYER 3223 *',
			'preciocompra'=>'62.02',
			'precioventa'=>'155.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '19',
            'descripcion'=>'APAGADOR ESCALERA SAMY',
			'preciocompra'=>'44.83',
			'precioventa'=>'112.07499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '136558',
            'descripcion'=>'APAGADOR PUSH SURTEK',
			'preciocompra'=>'51.1',
			'precioventa'=>'127.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '70',
            'descripcion'=>'APAGADOR ROYER VIS.CUAD.222 *',
			'preciocompra'=>'58.48',
			'precioventa'=>'146.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1859',
            'descripcion'=>'APAGADOR ROYER VIS.RED.221 *',
			'preciocompra'=>'36.23',
			'precioventa'=>'90.57499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4456',
            'descripcion'=>'APAGADOR SENCILLO BTICINO *',
			'preciocompra'=>'33.62',
			'precioventa'=>'84.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' E2001 ',
            'descripcion'=>'APAGADOR SENCILLO BTICINO MODUS *',
			'preciocompra'=>'75.57',
			'precioventa'=>'188.92499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2731',
            'descripcion'=>'APAGADOR SENCILLO ROYER 3222 *',
			'preciocompra'=>'46.58',
			'precioventa'=>'116.44999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '42',
            'descripcion'=>'APAGADOR SENCILLO SAMY',
			'preciocompra'=>'55.29',
			'precioventa'=>'138.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '343147',
            'descripcion'=>'APAGADOR VISIBLE OVALADO SANELEC 4314',
			'preciocompra'=>'71.13',
			'precioventa'=>'177.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '116742',
            'descripcion'=>'APAGADOR VISIBLE PLANO AKSI',
			'preciocompra'=>'44.55',
			'precioventa'=>'111.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46004',
            'descripcion'=>'APAGADOR VISIBLE VOLTECH APSO-S',
			'preciocompra'=>'58.68',
			'precioventa'=>'146.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' P-LL1605-25 ',
            'descripcion'=>'ARBOL P/REGADERA CON TORNILLO',
			'preciocompra'=>'24.79',
			'precioventa'=>'61.974999999999994',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' DCS05-F ',
            'descripcion'=>'ARCO P/CALAR 5 SEGUETAS RAM-TOOLS',
			'preciocompra'=>'37.34',
			'precioventa'=>'93.35000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H002',
            'descripcion'=>'ARCO P/CALAR MADERA NO.2 TUBULAR',
			'preciocompra'=>'28.41',
			'precioventa'=>'71.025',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H003',
            'descripcion'=>'ARCO P/CALAR MADERA NO.3 TUBULAR',
			'preciocompra'=>'17.23',
			'precioventa'=>'43.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' ARCO12MR',
            'descripcion'=>'ARCO P/SEGUETA MAR-RAM CUADRADO M/AMARIL',
			'preciocompra'=>'9.51',
			'precioventa'=>'23.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '301004',
            'descripcion'=>'ARCO P/SEGUETA MAX-TOOLS CROMADO',
			'preciocompra'=>'12.64',
			'precioventa'=>'31.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '301001',
            'descripcion'=>'ARCO P/SEGUETA MAX-TOOLS SOLERA',
			'preciocompra'=>'53.56',
			'precioventa'=>'133.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '1825',
            'descripcion'=>'ARCO P/SEGUETA MINI ECONOMICO *',
			'preciocompra'=>'19.81',
			'precioventa'=>'49.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '20017',
            'descripcion'=>'ARCO P/SEGUETA PRETUL SOLERA 12" A*',
			'preciocompra'=>'20.76',
			'precioventa'=>'51.900000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '370327',
            'descripcion'=>'ARCO P/SEGUETA SANTUL 7032 ALTA TENSION',
			'preciocompra'=>'31.06',
			'precioventa'=>'77.64999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H044',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/2X1"',
			'preciocompra'=>'73.62',
			'precioventa'=>'184.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' AR15110 ',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/4X1GRIS',
			'preciocompra'=>'58.25',
			'precioventa'=>'145.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H005',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 1/4X1"',
			'preciocompra'=>'59.07',
			'precioventa'=>'147.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => ' H043',
            'descripcion'=>'ARCO P/SEGUETA SOLERA 3/8X1"',
			'preciocompra'=>'27.68',
			'precioventa'=>'69.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10232',
            'descripcion'=>'ARCO P/SEGUETA TRUPER TENS 12" P ATX12 *',
			'preciocompra'=>'25.1',
			'precioventa'=>'62.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10234',
            'descripcion'=>'ARCO P/SEGUETA TRUPER TUBULAR 12" ATT12*',
			'preciocompra'=>'58.63',
			'precioventa'=>'146.57500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '19255',
            'descripcion'=>'ARMAZON METALICO PARA RODILLO TRUPER',
			'preciocompra'=>'49.1',
			'precioventa'=>'122.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'1'
        ]);


        Producto::create([
            'codigo' => '44377',
            'descripcion'=>'ARMELLA ABIERTA 17X40 24 PZS FIERO',
			'preciocompra'=>'28.87',
			'precioventa'=>'72.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44378',
            'descripcion'=>'ARMELLA ABIERTA 18X50 18 PZS FIERO',
			'preciocompra'=>'38.32',
			'precioventa'=>'95.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44379',
            'descripcion'=>'ARMELLA ABIERTA 19X60 18 PZS FIERO',
			'preciocompra'=>'43.09',
			'precioventa'=>'107.72500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44380',
            'descripcion'=>'ARMELLA ABIERTA 20X70 24 PZS FIERO',
			'preciocompra'=>'13.59',
			'precioventa'=>'33.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44381',
            'descripcion'=>'ARMELLA ABIERTA 21X80 12 PZS FIERO',
			'preciocompra'=>'68.55',
			'precioventa'=>'171.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44382',
            'descripcion'=>'ARMELLA ABIERTA 22X100 12 PZS FIERO',
			'preciocompra'=>'71.04',
			'precioventa'=>'177.60000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44383',
            'descripcion'=>'ARMELLA ABIERTA 23X110 12 PZS FIERO',
			'preciocompra'=>'75.43',
			'precioventa'=>'188.57500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44370',
            'descripcion'=>'ARMELLA CERRADA 17X40 18 PZS FIERO',
			'preciocompra'=>'25.27',
			'precioventa'=>'63.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44371',
            'descripcion'=>'ARMELLA CERRADA 18X50 18 PZS FIERO',
			'preciocompra'=>'26.42',
			'precioventa'=>'66.05000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44372',
            'descripcion'=>'ARMELLA CERRADA 19X60 18 PZS FIERO',
			'preciocompra'=>'57.1',
			'precioventa'=>'142.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44373',
            'descripcion'=>'ARMELLA CERRADA 20X70 18 PZS FIERO',
			'preciocompra'=>'38.6',
			'precioventa'=>'96.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44374',
            'descripcion'=>'ARMELLA CERRADA 21X80 12 PZS FIERO',
			'preciocompra'=>'42.46',
			'precioventa'=>'106.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44375',
            'descripcion'=>'ARMELLA CERRADA 22X80 12 PZS FIERO',
			'preciocompra'=>'49.28',
			'precioventa'=>'123.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44376',
            'descripcion'=>'ARMELLA CERRADA 23X110 12 PZS FIERO',
			'preciocompra'=>'16.29',
			'precioventa'=>'40.724999999999994',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '137443',
            'descripcion'=>'ARNES SURTEK P/RESCATE UNITALLA',
			'preciocompra'=>'52.27',
			'precioventa'=>'130.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14439',
            'descripcion'=>'ARNES TRUPER 3 ANILLOS Y POSICI ARN5436¨',
			'preciocompra'=>'71.44',
			'precioventa'=>'178.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14432',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLE 1 ANIARN5435¨',
			'preciocompra'=>'26.93',
			'precioventa'=>'67.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14434',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLETO 5 ANILLOS P',
			'preciocompra'=>'29.98',
			'precioventa'=>'74.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '14433',
            'descripcion'=>'ARNES TRUPER CUERPO COMPLETO ARN-5437',
			'preciocompra'=>'25.02',
			'precioventa'=>'62.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '49902',
            'descripcion'=>'ASIENTO PARA WC 35 CM BLANCO FOSET',
			'preciocompra'=>'51.28',
			'precioventa'=>'128.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '49903',
            'descripcion'=>'ASIENTO PARA WC 40 CM BLANCO FOSET',
			'preciocompra'=>'43.38',
			'precioventa'=>'108.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' RS',
            'descripcion'=>'ASPERSOR GRIRATORIO MAR-RAM',
			'preciocompra'=>'21.36',
			'precioventa'=>'53.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375339',
            'descripcion'=>'ASPERSOR SANTUL C/ESTACA METAL 7533 *',
			'preciocompra'=>'16.83',
			'precioventa'=>'42.074999999999996',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375322',
            'descripcion'=>'ASPERSOR SANTUL C/ESTACA PLASTICO 7532 *',
			'preciocompra'=>'58.89',
			'precioventa'=>'147.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375360',
            'descripcion'=>'ASPERSOR SANTUL CON ESTACA 9 FUNCIO 753*',
			'preciocompra'=>'28.12',
			'precioventa'=>'70.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '375308',
            'descripcion'=>'ASPERSOR SANTUL METALICO P/RIEGO 7530*',
			'preciocompra'=>'32.34',
			'precioventa'=>'80.85000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12076',
            'descripcion'=>'ASPIRADORA FILTRO DE ESPUMA PA ASP1-03',
			'preciocompra'=>'25.62',
			'precioventa'=>'64.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '22090',
            'descripcion'=>'ASPIRADORA PRETUL P/AUTO 12 VOLS',
			'preciocompra'=>'35.25',
			'precioventa'=>'88.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12091',
            'descripcion'=>'ASPIRADORA TRUPER 3 GALONES ASPI-03',
			'preciocompra'=>'75.88',
			'precioventa'=>'189.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '12092',
            'descripcion'=>'ASPIRADORA TRUPER 6 GALONES ASPI-06',
			'preciocompra'=>'65.58',
			'precioventa'=>'163.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '103502',
            'descripcion'=>'ATOMIZADOR AKSI 1 LTS.',
			'preciocompra'=>'27.02',
			'precioventa'=>'67.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '103501',
            'descripcion'=>'ATOMIZADOR AKSI DE 500 MIL.',
			'preciocompra'=>'76.54',
			'precioventa'=>'191.35000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '388018',
            'descripcion'=>'ATOMIZADOR SANTUL SPRAY 17 8801',
			'preciocompra'=>'10.76',
			'precioventa'=>'26.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '388001',
            'descripcion'=>'ATOMIZADOR SPRAY SANTUL 900 MIL 8800',
			'preciocompra'=>'20.51',
			'precioventa'=>'51.275000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' MH-7000WH ',
            'descripcion'=>'AUDIFONO MITZU 3.5 DIADEMA T-BEATS BLANCO',
			'preciocompra'=>'13.01',
			'precioventa'=>'32.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' MH-9088BL ',
            'descripcion'=>'AUDIFONO MITZU BLUETOOTH V2 1+EDR 10M/MANOS LIBRES',
			'preciocompra'=>'71.36',
			'precioventa'=>'178.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '13975',
            'descripcion'=>'AUTOCLER 135 PZS TRUPER 1/4-3/8-1/2 ¨¨',
			'preciocompra'=>'74.85',
			'precioventa'=>'187.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' AEE1534MR ',
            'descripcion'=>'AUTOCLER 15 PZS MAR-RAM ENT 3/4 ASTRIADO',
			'preciocompra'=>'23.18',
			'precioventa'=>'57.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1434MR ',
            'descripcion'=>'AUTOCLER 15 PZS MAR-RAM ENTRADA DE 3/4',
			'preciocompra'=>'70.94',
			'precioventa'=>'177.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1612MR ',
            'descripcion'=>'AUTOCLER 16 PZS MAR-RAM PROF MILIMETRICO',
			'preciocompra'=>'45.65',
			'precioventa'=>'114.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A1714MMR',
            'descripcion'=>'AUTOCLER 17 PZS 1/4" MAR-RAM MM.ROJO',
			'preciocompra'=>'52.42',
			'precioventa'=>'131.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SK17',
            'descripcion'=>'AUTOCLER 17 PZS 1/4" MAR-RAM STD AZUL',
			'preciocompra'=>'8.18',
			'precioventa'=>'20.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2134MR ',
            'descripcion'=>'AUTOCLER 21 PZS MAR-RAM ENTRADA DE 3/4"',
			'preciocompra'=>'44.14',
			'precioventa'=>'110.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2512MR ',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM PROF HOGAR/ CHIC',
			'preciocompra'=>'50.4',
			'precioventa'=>'126.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A2512MMR',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM PROFE USO TALLER',
			'preciocompra'=>'18.52',
			'precioventa'=>'46.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' SK25',
            'descripcion'=>'AUTOCLER 25 PZS MAR-RAM SK25',
			'preciocompra'=>'20.44',
			'precioventa'=>'51.1',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A40MR ',
            'descripcion'=>'AUTOCLER 40 PZS MAR-RAM 1/4"',
			'preciocompra'=>'50.17',
			'precioventa'=>'125.42500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',
            'stock'=>'15',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A52MR ',
            'descripcion'=>'AUTOCLER 52 PZS MAR-RAM PROFESINAL',
			'preciocompra'=>'12.03',
			'precioventa'=>'30.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' A75MR ',
            'descripcion'=>'AUTOCLER 75 PZS MAR-RAM 1/4',
			'preciocompra'=>'40.28',
			'precioventa'=>'100.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',
            'stock'=>'15',
            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' TC07-F',
            'descripcion'=>'AVELLANADOR 7 PZS RAM-TOOLS',
			'preciocompra'=>'31.6',
			'precioventa'=>'79.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '112120',
            'descripcion'=>'AVELLANADOR AKSI CON DOBLE MARIPOSA 3',
			'preciocompra'=>'50.49',
			'precioventa'=>'126.22500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '12868',
            'descripcion'=>'AVELLANADOR TRUPER DE TUB 3/16-5/8 JAV-7',
			'preciocompra'=>'43.06',
			'precioventa'=>'107.65',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'2'
        ]);


        Producto::create([
            'codigo' => '10555',
            'descripcion'=>'AZADON P/NIÑOS TRUPER MANGO 42"ATJ-KID',
			'preciocompra'=>'30.63',
			'precioventa'=>'76.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10603',
            'descripcion'=>'AZADON TRUPER AL-1 NO.1 FORJADO SIN MAN*',
			'preciocompra'=>'77.21',
			'precioventa'=>'193.02499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10606',
            'descripcion'=>'AZADON TRUPER AL-2 NO.2 FORJADO SIN MAN*',
			'preciocompra'=>'11.82',
			'precioventa'=>'29.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10609',
            'descripcion'=>'AZADON TRUPER AL-3 NO.3 FORJADO SIN MAN*',
			'preciocompra'=>'66.21',
			'precioventa'=>'165.52499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10621',
            'descripcion'=>'AZADON TRUPER LANE C/MANGO NO.3 1.8 AL-3',
			'preciocompra'=>'65.59',
			'precioventa'=>'163.97500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-4015ST',
            'descripcion'=>'BAFLE AMPLIFICADO 15" DONKER RECARG KIT',
			'preciocompra'=>'39.94',
			'precioventa'=>'99.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-5815',
            'descripcion'=>'BAFLE AMPLIFICADO 15" KAISER RECARGABLE KIT',
			'preciocompra'=>'21.53',
			'precioventa'=>'53.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-4015',
            'descripcion'=>'BAFLE DONKER 15" RECARGABLE BLUETOOTH LUZ LED',
			'preciocompra'=>'60.6',
			'precioventa'=>'151.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' MSA-5715',
            'descripcion'=>'BAFLE MITZU 15" RECARGABLE AMPLI BLUETOOTH',
			'preciocompra'=>'74.23',
			'precioventa'=>'185.57500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' KSA-7908BT',
            'descripcion'=>'BAFLE MITZU 8" RECARGABLE AMPLIFICADO BLUETOOTH',
			'preciocompra'=>'5.96',
			'precioventa'=>'14.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '8063',
            'descripcion'=>'BALASTRA LUMICON 2X39 127V.T12 SLIM-LINE',
			'preciocompra'=>'28.7',
			'precioventa'=>'71.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '19784',
            'descripcion'=>'BALERO P/CARRETILLA JGO 2 PZS',
			'preciocompra'=>'78.18',
			'precioventa'=>'195.45000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' SR-1028CR ',
            'descripcion'=>'BANDERIN ANARANJADO MALLA C/REFLEJANTE T',
			'preciocompra'=>'62.43',
			'precioventa'=>'156.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BALLMR',
            'descripcion'=>'BANDOLA CON DESTORCEDOR MAR-RAM 1PZ 5/8"',
			'preciocompra'=>'44.51',
			'precioventa'=>'111.27499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' ASL07DB ',
            'descripcion'=>'BANDOLA DE ALUMINIO 2 PZS 7MM BR COLORES',
			'preciocompra'=>'62.5',
			'precioventa'=>'156.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206202',
            'descripcion'=>'BANDOLA GIRA C/DESTOR OVAL 3/8 10 PZS',
			'preciocompra'=>'11.96',
			'precioventa'=>'29.900000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BGF1MR',
            'descripcion'=>'BANDOLA GIRATORIA CIERRE RAPIDO 1" GANCHO FIJO',
			'preciocompra'=>'52.41',
			'precioventa'=>'131.02499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BG1MR ',
            'descripcion'=>'BANDOLA GIRATORIA DESTORCEDOR 1"',
			'preciocompra'=>'54.07',
			'precioventa'=>'135.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206263',
            'descripcion'=>'BANDOLA MOSQUETON RECTA 12 CM',
			'preciocompra'=>'69.4',
			'precioventa'=>'173.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '206261',
            'descripcion'=>'BANDOLA MOSQUETON RECTA 8 CM',
			'preciocompra'=>'47.26',
			'precioventa'=>'118.14999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377784',
            'descripcion'=>'BANDOLA SANTUL 2" LARGO 51 MM 7778',
			'preciocompra'=>'34.34',
			'precioventa'=>'85.85000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377807',
            'descripcion'=>'BANDOLA SANTUL 3 1/2" LA 89 MM 7780*',
			'preciocompra'=>'37.11',
			'precioventa'=>'92.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377791',
            'descripcion'=>'BANDOLA SANTUL 3" LARGO 76 MM 7779 *',
			'preciocompra'=>'65.0',
			'precioventa'=>'162.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377821',
            'descripcion'=>'BANDOLA SANTUL 4 1/2" LA 108 MM 7782*',
			'preciocompra'=>'8.27',
			'precioventa'=>'20.674999999999997',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '377814',
            'descripcion'=>'BANDOLA SANTUL 4" LARGO 102 MM 7781 *',
			'preciocompra'=>'19.91',
			'precioventa'=>'49.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMALUM8MR ',
            'descripcion'=>'BANDOLA TIPO PERA ALUMINIO 8X80MM C/SEGURO MAR-RAM',
			'preciocompra'=>'44.39',
			'precioventa'=>'110.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS6MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 6X60MM C/SEGURO MAR-RAM',
			'preciocompra'=>'25.98',
			'precioventa'=>'64.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA6MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 6X60MM MAR-RAM',
			'preciocompra'=>'74.58',
			'precioventa'=>'186.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS7MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 7X70MM C/SEGURO MAR-RAM',
			'preciocompra'=>'66.04',
			'precioventa'=>'165.10000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA7MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 7X70MM MAR-RAM',
			'preciocompra'=>'39.26',
			'precioventa'=>'98.14999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS8MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 8X80MM C/SEGURO MAR-RAM',
			'preciocompra'=>'6.76',
			'precioventa'=>'16.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA8MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 8X80MM MAR-RAM',
			'preciocompra'=>'43.13',
			'precioventa'=>'107.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS9MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 9X90MM C/SEGURO MAR-RAM',
			'preciocompra'=>'38.05',
			'precioventa'=>'95.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMA9MR',
            'descripcion'=>'BANDOLA TIPO PERA NO. 9X90MM MAR-RAM',
			'preciocompra'=>'66.7',
			'precioventa'=>'166.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS10MR ',
            'descripcion'=>'BANDOLA TIPO PERA NO.10X100MM C/SEGURO MAR-RAM',
			'preciocompra'=>'46.88',
			'precioventa'=>'117.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' BMATS12MR ',
            'descripcion'=>'BANDOLA TIPO PERA NO.12X140MM C/SEGURO MAR-RAM',
			'preciocompra'=>'51.87',
			'precioventa'=>'129.67499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '244841',
            'descripcion'=>'BANDOLA TIPO TRIANGULO 5 MM DELTA C/TU',
			'preciocompra'=>'79.76',
			'precioventa'=>'199.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '12338',
            'descripcion'=>'BARBOQUEJO CON BARBILLA PARA CASCO TRUPER DE SEGUR',
			'preciocompra'=>'21.91',
			'precioventa'=>'54.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '137622',
            'descripcion'=>'BARBOQUEJO SURTEK SIN BARBILLA',
			'preciocompra'=>'15.33',
			'precioventa'=>'38.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10859',
            'descripcion'=>'BARRETA DE U¥A TRUPER 3/4X75CTM BU-75',
			'preciocompra'=>'43.03',
			'precioventa'=>'107.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10762',
            'descripcion'=>'BARRETA TRUPER 1" X 1.75MTS BAP-175',
			'preciocompra'=>'51.56',
			'precioventa'=>'128.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10756',
            'descripcion'=>'BARRETA TRUPER 1"X1.50 MTS BAP-150',
			'preciocompra'=>'55.27',
			'precioventa'=>'138.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10750',
            'descripcion'=>'BARRETA TRUPER 7/8"X100 CM',
			'preciocompra'=>'34.79',
			'precioventa'=>'86.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10753',
            'descripcion'=>'BARRETA TRUPER 7/8"X125CM',
			'preciocompra'=>'78.7',
			'precioventa'=>'196.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '49910',
            'descripcion'=>'BASCULA DE BA¥O HASTA 180 KG VOLTECH',
			'preciocompra'=>'59.14',
			'precioventa'=>'147.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '207123',
            'descripcion'=>'BASCULA DE VIAJE MALETERA 25 KG OBI DIGI',
			'preciocompra'=>'5.89',
			'precioventa'=>'14.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '359278',
            'descripcion'=>'BASCULA DIGITAL SANTUL 5 KILOS',
			'preciocompra'=>'33.69',
			'precioventa'=>'84.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '207135',
            'descripcion'=>'BASCULA MULTISUSOS OBI 2KG/0.1G DIGITAL',
			'preciocompra'=>'47.33',
			'precioventa'=>'118.32499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '21253',
            'descripcion'=>'BASCULA ROMANA PRETUL 25 KG',
			'preciocompra'=>'30.5',
			'precioventa'=>'76.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17087',
            'descripcion'=>'BASCULA TRUPER COLGANTE DE 10 KG.',
			'preciocompra'=>'41.87',
			'precioventa'=>'104.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '15160',
            'descripcion'=>'BASCULA TRUPER DIGITAL BASE DE VIDRIO 5 KG',
			'preciocompra'=>'9.5',
			'precioventa'=>'23.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17082',
            'descripcion'=>'BASCULA TRUPER MECANICA C/CUCHARON 2 KIL',
			'preciocompra'=>'68.33',
			'precioventa'=>'170.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17083',
            'descripcion'=>'BASCULA TRUPER MECANICA C/CUCHARON 5 KIL',
			'preciocompra'=>'19.92',
			'precioventa'=>'49.800000000000004',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '17556',
            'descripcion'=>'BASE P/CAUTIN DE LAPIZ TRUPER C/ESPONJA',
			'preciocompra'=>'66.85',
			'precioventa'=>'167.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '1384',
            'descripcion'=>'BASE P/MEDIDOR IUSA 4 TERMINALES 5875',
			'preciocompra'=>'55.98',
			'precioventa'=>'139.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46025',
            'descripcion'=>'BASE P/MEDIDOR VOLTECH',
			'preciocompra'=>'7.3',
			'precioventa'=>'18.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '117583',
            'descripcion'=>'BASE PORTALAMPARA BI PIN G13 AKSI',
			'preciocompra'=>'48.78',
			'precioventa'=>'121.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46508',
            'descripcion'=>'BASE PORTALAMPARA BIPIN VOLTECH POPL-15',
			'preciocompra'=>'35.86',
			'precioventa'=>'89.65',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313935',
            'descripcion'=>'BASE SANELECP/FOCO MR-16 FIJA CROMO',
			'preciocompra'=>'39.26',
			'precioventa'=>'98.14999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313942',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 DIRIGIBLE BLANCA',
			'preciocompra'=>'24.45',
			'precioventa'=>'61.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313928',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 FIJA BLANCA',
			'preciocompra'=>'67.41',
			'precioventa'=>'168.52499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '313959',
            'descripcion'=>'BASE SANELEC P/FOCO MR-16 MOBIBLE PLATA',
			'preciocompra'=>'32.99',
			'precioventa'=>'82.47500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '46506',
            'descripcion'=>'BASE SLIM LINE VOLTECH POPL-14',
			'preciocompra'=>'45.55',
			'precioventa'=>'113.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => ' IP-5525WH ',
            'descripcion'=>'BATERIA MITZU 2500 MA ULTRA PLANA UNIVER',
			'preciocompra'=>'53.04',
			'precioventa'=>'132.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '150',
            'descripcion'=>'BERBIQUI ECONOMICO #12',
			'preciocompra'=>'64.5',
			'precioventa'=>'161.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11024',
            'descripcion'=>'BIELDO TRUPER 4 DIENTES JARDIN FIBRA 30"',
			'preciocompra'=>'40.07',
			'precioventa'=>'100.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11003',
            'descripcion'=>'BIELDO TRUPER FORJADO 4 D C/M 50"BPJ-4',
			'preciocompra'=>'25.83',
			'precioventa'=>'64.57499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11018',
            'descripcion'=>'BIELDO TRUPER JARDIN T2000 4D C/M BJ-4P',
			'preciocompra'=>'53.4',
			'precioventa'=>'133.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '11009',
            'descripcion'=>'BIELDO TRUPER PARA PAJA 6 DIENTES 54" MA',
			'preciocompra'=>'42.58',
			'precioventa'=>'106.44999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '163',
            'descripcion'=>'BIRLO GALVANIZADO 1/4X4" P/LAMINAS',
			'preciocompra'=>'61.16',
			'precioventa'=>'152.89999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10930010',
            'descripcion'=>'BIRLO GALVANIZADO 3/16X4 P/LAMINA PZ',
			'preciocompra'=>'39.1',
			'precioventa'=>'97.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '10930015',
            'descripcion'=>'BIRLO GALVANIZADO 3/16X5 P/LAMINA PZS',
			'preciocompra'=>'75.33',
			'precioventa'=>'188.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'6'
        ]);


        Producto::create([
            'codigo' => '28800',
            'descripcion'=>'BISAGRA 3X3" HERMEX BASIC LATONADA C/AMA',
			'preciocompra'=>'10.82',
			'precioventa'=>'27.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43237',
            'descripcion'=>'BISAGRA 3X3" HERMEX LATONADA P/PLANA',
			'preciocompra'=>'52.79',
			'precioventa'=>'131.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43232',
            'descripcion'=>'BISAGRA 3X3" HERMEX LATONADA P/REDONDO',
			'preciocompra'=>'49.89',
			'precioventa'=>'124.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43261',
            'descripcion'=>'BISAGRA HERMEX 3" MATE PLANA',
			'preciocompra'=>'54.13',
			'precioventa'=>'135.32500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43239',
            'descripcion'=>'BISAGRA HERMEX 4" ACERO LATONADO PLANA',
			'preciocompra'=>'79.98',
			'precioventa'=>'199.95000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43193',
            'descripcion'=>'BISAGRA HERMEX LATONADA 1 1/2"X1 3/16"',
			'preciocompra'=>'35.29',
			'precioventa'=>'88.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43192',
            'descripcion'=>'BISAGRA HERMEX LATONADA 1"X7/8"',
			'preciocompra'=>'77.24',
			'precioventa'=>'193.1',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43195',
            'descripcion'=>'BISAGRA HERMEX LATONADA 2 1/2"X1 5/8"',
			'preciocompra'=>'74.38',
			'precioventa'=>'185.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43194',
            'descripcion'=>'BISAGRA HERMEX LATONADA 2"X 1 1/2"',
			'preciocompra'=>'15.8',
			'precioventa'=>'39.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43197',
            'descripcion'=>'BISAGRA HERMEX LATONADA 3 1/2"X 2 1/8"',
			'preciocompra'=>'70.83',
			'precioventa'=>'177.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43196',
            'descripcion'=>'BISAGRA HERMEX LATONADA 3"X 1 15/16"',
			'preciocompra'=>'23.61',
			'precioventa'=>'59.025',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43198',
            'descripcion'=>'BISAGRA HERMEX LATONADA 4"X 2 3/4"',
			'preciocompra'=>'28.45',
			'precioventa'=>'71.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43186',
            'descripcion'=>'BISAGRA HERMEX PULIDO 1 1/2"X1 3/16"',
			'preciocompra'=>'69.14',
			'precioventa'=>'172.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43185',
            'descripcion'=>'BISAGRA HERMEX PULIDO 1"X7/8"',
			'preciocompra'=>'12.98',
			'precioventa'=>'32.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43188',
            'descripcion'=>'BISAGRA HERMEX PULIDO 2 1/2"X1 5/8"',
			'preciocompra'=>'17.98',
			'precioventa'=>'44.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43187',
            'descripcion'=>'BISAGRA HERMEX PULIDO 2"X 1 1/2"',
			'preciocompra'=>'56.02',
			'precioventa'=>'140.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43190',
            'descripcion'=>'BISAGRA HERMEX PULIDO 3 1/2"X2 1/8"',
			'preciocompra'=>'69.17',
			'precioventa'=>'172.925',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43189',
            'descripcion'=>'BISAGRA HERMEX PULIDO 3"X 1 15/16"',
			'preciocompra'=>'38.32',
			'precioventa'=>'95.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '43191',
            'descripcion'=>'BISAGRA HERMEX PULIDO 4"X 2 3/4"',
			'preciocompra'=>'53.89',
			'precioventa'=>'134.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '18912',
            'descripcion'=>'BISAGRA TRUPER 3-1/2" REMACHADO 35L SANT',
			'preciocompra'=>'32.29',
			'precioventa'=>'80.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '18958',
            'descripcion'=>'BISAGRA TRUPER LA 3 1/2 C.RED BIC-35L-',
			'preciocompra'=>'77.39',
			'precioventa'=>'193.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2351',
            'descripcion'=>'BISAGRA TUBULAR 1/2',
			'preciocompra'=>'6.91',
			'precioventa'=>'17.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '5185',
            'descripcion'=>'BISAGRA TUBULAR 3/4',
			'preciocompra'=>'37.94',
			'precioventa'=>'94.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2211',
            'descripcion'=>'BISAGRA TUBULAR 3/8',
			'preciocompra'=>'5.82',
			'precioventa'=>'14.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '2705',
            'descripcion'=>'BISAGRA TUBULAR 5/8',
			'preciocompra'=>'43.67',
			'precioventa'=>'109.17500000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' DSB-6950',
            'descripcion'=>'BOCINA 6X9 3 VIAS 800 W PMPO DONKER',
			'preciocompra'=>'25.05',
			'precioventa'=>'62.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9111BK ',
            'descripcion'=>'BOCINA MITZU REC/BT/TF/AUX/FM/USB/MANOS LIBRES NEG',
			'preciocompra'=>'18.43',
			'precioventa'=>'46.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9426BL ',
            'descripcion'=>'BOCINA PORTATIL MITZU 2X4 180W BLUETOOH',
			'preciocompra'=>'5.07',
			'precioventa'=>'12.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 18-9450 ',
            'descripcion'=>'BOCINA PORTATIL MITZU 6.5" 120W USB SD A',
			'preciocompra'=>'56.67',
			'precioventa'=>'141.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '45270',
            'descripcion'=>'BOILER FOSET SOLAR 100 LTS TERMOTANQUE',
			'preciocompra'=>'27.29',
			'precioventa'=>'68.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BB10MR',
            'descripcion'=>'BOMBA DE MANO 10" MAR-RAM BALONERA',
			'preciocompra'=>'28.02',
			'precioventa'=>'70.05',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BP15MR',
            'descripcion'=>'BOMBA DE MANO 15" MAR-RAM',
			'preciocompra'=>'35.72',
			'precioventa'=>'89.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BP20MR',
            'descripcion'=>'BOMBA DE MANO 20" MAR-RAM BP20MR',
			'preciocompra'=>'47.42',
			'precioventa'=>'118.55000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '14863',
            'descripcion'=>'BOMBA DE MANO 23" TRUPER BOM-TR',
			'preciocompra'=>'22.93',
			'precioventa'=>'57.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' BAPMR ',
            'descripcion'=>'BOMBA DE PIE MAR-RAM BAPMR',
			'preciocompra'=>'40.51',
			'precioventa'=>'101.27499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' MZSP',
            'descripcion'=>'BOMBA DE SIFON PLASTICA P/GAS MAR-RAM',
			'preciocompra'=>'49.79',
			'precioventa'=>'124.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '442',
            'descripcion'=>'BOMBA EXTRACTORA DE LIQUIDOS MAR-RAM',
			'preciocompra'=>'70.52',
			'precioventa'=>'176.29999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10071',
            'descripcion'=>'BOMBA P/AGUA1/4 HP TRUPER BOAC-1/4 $',
			'preciocompra'=>'35.07',
			'precioventa'=>'87.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385192',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP 20 MTS PERIFERICANO IVA)',
			'preciocompra'=>'71.03',
			'precioventa'=>'177.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1320125',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP IGOTO AUTOCEBANTE AT60',
			'preciocompra'=>'52.61',
			'precioventa'=>'131.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191321',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP PERIFERICA',
			'preciocompra'=>'63.71',
			'precioventa'=>'159.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1320127',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP PERIFERICA DUO IGOTO TPKM60',
			'preciocompra'=>'48.61',
			'precioventa'=>'121.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10072',
            'descripcion'=>'BOMBA P/AGUA 1/2 HP TRUPER BOAC-1/2 $',
			'preciocompra'=>'44.61',
			'precioventa'=>'111.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10073',
            'descripcion'=>'BOMBA P/AGUA 3/4 HP TRUPER BOAC-3/4 $',
			'preciocompra'=>'38.76',
			'precioventa'=>'96.89999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385178',
            'descripcion'=>'BOMBA P/AGUA3/4 HPPERIFERICA 8517 SA',
			'preciocompra'=>'60.95',
			'precioventa'=>'152.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10075',
            'descripcion'=>'BOMBA P/AGUA 1 1/2 HP TRUPER BOAC-1 1/',
			'preciocompra'=>'59.48',
			'precioventa'=>'148.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191323',
            'descripcion'=>'BOMBA P/AGUA 1 HP AKSI PERIFERICA',
			'preciocompra'=>'13.38',
			'precioventa'=>'33.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '385161',
            'descripcion'=>'BOMBA P/AGUA 1 HP PERIFERICA 8516 SANT',
			'preciocompra'=>'66.32',
			'precioventa'=>'165.79999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '10074',
            'descripcion'=>'BOMBA P/AGUA 1 HP TRUPER BOAC-1 $',
			'preciocompra'=>'30.16',
			'precioventa'=>'75.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '157',
            'descripcion'=>'BOMBA P/W.C GRANDENEGRA 650. *',
			'preciocompra'=>'66.64',
			'precioventa'=>'166.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '540',
            'descripcion'=>'BOMBA P/W.C. ROJA GRANDE 650 *',
			'preciocompra'=>'29.88',
			'precioventa'=>'74.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '295',
            'descripcion'=>'BOMBA P/W.C. ROJA MEDIANA 550',
			'preciocompra'=>'33.81',
			'precioventa'=>'84.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '2202',
            'descripcion'=>'BOMBA P/W.C.MEDIANANEGRA 550. *',
			'preciocompra'=>'35.92',
			'precioventa'=>'89.80000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191301',
            'descripcion'=>'BOMBA SUMERGIBLE 750W AKSI',
			'preciocompra'=>'38.3',
			'precioventa'=>'95.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '191303',
            'descripcion'=>'BOMBA SUMERGIBLE AKSI AGUA SUCIA 400W',
			'preciocompra'=>'74.78',
			'precioventa'=>'186.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1118',
            'descripcion'=>'BOQUILLA P/SOPLETE CHICA « RH',
			'preciocompra'=>'42.61',
			'precioventa'=>'106.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '2214',
            'descripcion'=>'BOQUILLA P/SOPLETE GRANDE 7/8 RH',
			'preciocompra'=>'16.28',
			'precioventa'=>'40.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' 1 134 ',
            'descripcion'=>'BOQUILLA P/SOPLETE LINMEX C/CARTUCHO G-3',
			'preciocompra'=>'43.43',
			'precioventa'=>'108.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '11986',
            'descripcion'=>'BOQUILLA P/SOPLETE TRUPER 65MM ROSCA',
			'preciocompra'=>'28.25',
			'precioventa'=>'70.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '26401',
            'descripcion'=>'BORLA DE LANA P/PULIDORA PRETUL',
			'preciocompra'=>'40.71',
			'precioventa'=>'101.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '146',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.5',
			'preciocompra'=>'17.81',
			'precioventa'=>'44.525',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '355',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.7',
			'preciocompra'=>'36.37',
			'precioventa'=>'90.925',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '584',
            'descripcion'=>'BORLA PARA PULIR 100% LANA NO.9',
			'preciocompra'=>'27.7',
			'precioventa'=>'69.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17920',
            'descripcion'=>'BOTA HULE JARDINERA NO.24 TRUPER',
			'preciocompra'=>'66.32',
			'precioventa'=>'165.79999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17921',
            'descripcion'=>'BOTA HULE JARDINERA NO.25 TRUPER',
			'preciocompra'=>'16.8',
			'precioventa'=>'42.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17922',
            'descripcion'=>'BOTA HULE JARDINERA NO.26 TRUPER',
			'preciocompra'=>'70.19',
			'precioventa'=>'175.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17923',
            'descripcion'=>'BOTA HULE JARDINERA NO.27 TRUPER',
			'preciocompra'=>'14.23',
			'precioventa'=>'35.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17924',
            'descripcion'=>'BOTA HULE JARDINERA NO.28 TRUPER',
			'preciocompra'=>'40.9',
			'precioventa'=>'102.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '17925',
            'descripcion'=>'BOTA HULE JARDINERA NO.29 TRUPER',
			'preciocompra'=>'10.75',
			'precioventa'=>'26.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114411',
            'descripcion'=>'BOTA HULE SANITARIA NO.25 BLANCA AKSI',
			'preciocompra'=>'12.38',
			'precioventa'=>'30.950000000000003',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114412',
            'descripcion'=>'BOTA HULE SANITARIA NO.26 BLANCA AKSI',
			'preciocompra'=>'30.47',
			'precioventa'=>'76.175',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114413',
            'descripcion'=>'BOTA HULE SANITARIA NO.27 BLANCA AKSI',
			'preciocompra'=>'68.92',
			'precioventa'=>'172.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114414',
            'descripcion'=>'BOTA HULE SANITARIA NO.28 BLANCA AKSI',
			'preciocompra'=>'30.35',
			'precioventa'=>'75.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '4592',
            'descripcion'=>'BOTELLA LIMONES FV98081LE-C',
			'preciocompra'=>'41.73',
			'precioventa'=>'104.32499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B01 ',
            'descripcion'=>'BOTIQUIN CHICO BLANCO 23X16X7',
			'preciocompra'=>'68.74',
			'precioventa'=>'171.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B03 ',
            'descripcion'=>'BOTIQUIN GRANDE BLANCO 35X25X7',
			'preciocompra'=>'73.35',
			'precioventa'=>'183.375',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' B02 ',
            'descripcion'=>'BOTIQUIN MEDIANO BLANCO 30X21X7',
			'preciocompra'=>'64.72',
			'precioventa'=>'161.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '1508',
            'descripcion'=>'BOTON P/TIMBRE ROYER 3012 *',
			'preciocompra'=>'12.57',
			'precioventa'=>'31.425',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '2356',
            'descripcion'=>'BOTON TIMBRE ROYER CUAD.202',
			'preciocompra'=>'32.52',
			'precioventa'=>'81.30000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '116741',
            'descripcion'=>'BOTON TIMBRE VISIBLE PLANO AKSI',
			'preciocompra'=>'35.91',
			'precioventa'=>'89.77499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '49378',
            'descripcion'=>'BRAZO P/REGADERA C/CHAPETON FOSET',
			'preciocompra'=>'38.7',
			'precioventa'=>'96.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' P-TL40CM',
            'descripcion'=>'BRAZO P/REGADERA LARGO MAGA¥A 40 CTM',
			'preciocompra'=>'14.22',
			'precioventa'=>'35.550000000000004',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' P-TL50CM',
            'descripcion'=>'BRAZO P/REGADERA MAGA¥A 50 CTM',
			'preciocompra'=>'58.09',
			'precioventa'=>'145.22500000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => '114806',
            'descripcion'=>'BRAZO Y CHAPETON AKSI METALICO',
			'preciocompra'=>'9.36',
			'precioventa'=>'23.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'4'
        ]);


        Producto::create([
            'codigo' => ' CCAUMR',
            'descripcion'=>'CABLE ACERO MAR-RAM MULTIUSOS 12 MMX2MTS',
			'preciocompra'=>'57.7',
			'precioventa'=>'144.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CC51624 ',
            'descripcion'=>'CABLE ACERO PARA BICICLETA 5/16X24 BR',
			'preciocompra'=>'73.34',
			'precioventa'=>'183.35000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CC51636 ',
            'descripcion'=>'CABLE ACERO PARA BICICLETA 5/16X36 MAR-R',
			'preciocompra'=>'10.13',
			'precioventa'=>'25.325000000000003',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' RG-59L',
            'descripcion'=>'CABLE COAXIAL RG-59 100 MTS MAGAÑA',
			'preciocompra'=>'30.4',
			'precioventa'=>'76.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '48473',
            'descripcion'=>'CABLE COAXIAL RG-59 100 MTS VOLTECH',
			'preciocompra'=>'54.51',
			'precioventa'=>'136.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-5920 ',
            'descripcion'=>'CABLE COAXIAL RG-59 20 MTS NEGRO',
			'preciocompra'=>'39.48',
			'precioventa'=>'98.69999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342805',
            'descripcion'=>'CABLE COAXIAL RG-59 SANELEC 500 MTS',
			'preciocompra'=>'18.46',
			'precioventa'=>'46.150000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '342782',
            'descripcion'=>'CABLE COAXIAL RG-59 SANTUL 100 MTS',
			'preciocompra'=>'26.59',
			'precioventa'=>'66.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' RG-6L ',
            'descripcion'=>'CABLE COAXIAL RG-6 100 MTS MAGAÑA',
			'preciocompra'=>'20.18',
			'precioventa'=>'50.45',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '69',
            'descripcion'=>'CABLE COAXIAL RG-6 2 MTS CABLEVISION',
			'preciocompra'=>'54.03',
			'precioventa'=>'135.075',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-0620 ',
            'descripcion'=>'CABLE COAXIAL RG-6 20MTS OJO CABLEVISION',
			'preciocompra'=>'24.36',
			'precioventa'=>'60.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' CLL36 ',
            'descripcion'=>'CABLE CON CANDADO PARA BICICLETA 5/16',
			'preciocompra'=>'41.34',
			'precioventa'=>'103.35000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44220',
            'descripcion'=>'CABLE DE ACERO 1/16 RIGIDO RECUBIERTO FIERO',
			'preciocompra'=>'26.94',
			'precioventa'=>'67.35000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '213588',
            'descripcion'=>'CABLE DE ACERO 1/16-3/32 FORRADO 7X7 150',
			'preciocompra'=>'10.7',
			'precioventa'=>'26.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44224',
            'descripcion'=>'CABLE DE ACERO 1/4 FIERO FORRADO 7X19H 75MT',
			'preciocompra'=>'19.79',
			'precioventa'=>'49.474999999999994',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44217',
            'descripcion'=>'CABLE DE ACERO 3/16 RECUBIERTO 75 MTS FIERO',
			'preciocompra'=>'5.04',
			'precioventa'=>'12.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44206',
            'descripcion'=>'CABLE DE ACERO 3/16" RIGIDO FIERO 75 MTS CAB-3/16R',
			'preciocompra'=>'10.16',
			'precioventa'=>'25.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '44207',
            'descripcion'=>'CABLE DE ACERO 7X7 HILOS 75 MTS 2240 KG',
			'preciocompra'=>'10.59',
			'precioventa'=>'26.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14435',
            'descripcion'=>'CABLE DE VIDA 2 GANCHOS TRUPER 1.5 MTS.',
			'preciocompra'=>'15.5',
			'precioventa'=>'38.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '14436',
            'descripcion'=>'CABLE DE VIDA TRUPER 2 GANCH CAB-5489-20',
			'preciocompra'=>'32.01',
			'precioventa'=>'80.02499999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46266',
            'descripcion'=>'CABLE HDMI MACHO MACHO 90 CM VOLTECH',
			'preciocompra'=>'5.32',
			'precioventa'=>'13.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '264',
            'descripcion'=>'CABLE NO.10 *',
			'preciocompra'=>'29.53',
			'precioventa'=>'73.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340771',
            'descripcion'=>'CABLE NO.10 BLANCO KEERALUCOBRE',
			'preciocompra'=>'74.69',
			'precioventa'=>'186.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46055',
            'descripcion'=>'CABLE NO.10 BLANCO VOLTECH',
			'preciocompra'=>'29.3',
			'precioventa'=>'73.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340788',
            'descripcion'=>'CABLE NO.10 NEGRO KEER THW ALUCOBRE',
			'preciocompra'=>'68.74',
			'precioventa'=>'171.85',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46051',
            'descripcion'=>'CABLE NO.10 NEGRO VOLTECH',
			'preciocompra'=>'65.69',
			'precioventa'=>'164.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340764',
            'descripcion'=>'CABLE NO.10 ROJO KEER THW ALUCOBRE',
			'preciocompra'=>'33.72',
			'precioventa'=>'84.3',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46059',
            'descripcion'=>'CABLE NO.10 ROJO VOLTECH',
			'preciocompra'=>'30.89',
			'precioventa'=>'77.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340795',
            'descripcion'=>'CABLE NO.10 VERDE KEER THW ALUCOBRE',
			'preciocompra'=>'43.05',
			'precioventa'=>'107.625',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340078',
            'descripcion'=>'CABLE NO.10 VERDE SANTUL',
			'preciocompra'=>'28.88',
			'precioventa'=>'72.2',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '265',
            'descripcion'=>'CABLE NO.12',
			'preciocompra'=>'74.34',
			'precioventa'=>'185.85000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '4',
            'descripcion'=>'CABLE NO.12 BLANCO IUSA',
			'preciocompra'=>'70.94',
			'precioventa'=>'177.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340818',
            'descripcion'=>'CABLE NO.12 BLANCO KEER THW ALUCOBRE',
			'preciocompra'=>'31.04',
			'precioventa'=>'77.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46056',
            'descripcion'=>'CABLE NO.12 BLANCO VOLTECH',
			'preciocompra'=>'64.54',
			'precioventa'=>'161.35000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' I397454 ',
            'descripcion'=>'CABLE NO.12 NEGRO IUSA',
			'preciocompra'=>'12.96',
			'precioventa'=>'32.400000000000006',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46052',
            'descripcion'=>'CABLE NO.12 NEGRO VOLTECH',
			'preciocompra'=>'32.38',
			'precioventa'=>'80.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340825',
            'descripcion'=>'CABLE NO.12 NEGROTHW ALUCOBRE',
			'preciocompra'=>'30.24',
			'precioventa'=>'75.6',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' I397456 ',
            'descripcion'=>'CABLE NO.12 ROJO IUSA',
			'preciocompra'=>'21.69',
			'precioventa'=>'54.225',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340801',
            'descripcion'=>'CABLE NO.12 ROJO KEER THW ALUCOBRE',
			'preciocompra'=>'70.34',
			'precioventa'=>'175.85000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46060',
            'descripcion'=>'CABLE NO.12 ROJO VOLTECH',
			'preciocompra'=>'13.98',
			'precioventa'=>'34.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340832',
            'descripcion'=>'CABLE NO.12 VERDE KEER ALUCOBRE',
			'preciocompra'=>'18.5',
			'precioventa'=>'46.25',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340030',
            'descripcion'=>'CABLE NO.12 VERDE SANELEC',
			'preciocompra'=>'75.02',
			'precioventa'=>'187.54999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '266',
            'descripcion'=>'CABLE NO.14',
			'preciocompra'=>'52.6',
			'precioventa'=>'131.5',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46057',
            'descripcion'=>'CABLE NO.14 BLANCO VOLTECH',
			'preciocompra'=>'46.14',
			'precioventa'=>'115.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46053',
            'descripcion'=>'CABLE NO.14 NEGRO VOLTECH',
			'preciocompra'=>'71.96',
			'precioventa'=>'179.89999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46061',
            'descripcion'=>'CABLE NO.14 ROJO VOLTECH',
			'preciocompra'=>'38.81',
			'precioventa'=>'97.025',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' DU-18100',
            'descripcion'=>'CABLE NO.18 BICOLOR MAGA¥A',
			'preciocompra'=>'76.4',
			'precioventa'=>'191.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46268',
            'descripcion'=>'CABLE NO.18 BICOLOR VOLTECH 100M',
			'preciocompra'=>'7.79',
			'precioventa'=>'19.475',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => ' 07-18100P ',
            'descripcion'=>'CABLE NO.18 POLARIZADO MITZU',
			'preciocompra'=>'46.44',
			'precioventa'=>'116.1',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46270',
            'descripcion'=>'CABLE NO.18 POLARIZADO VOLTECH',
			'preciocompra'=>'48.45',
			'precioventa'=>'121.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '171',
            'descripcion'=>'CABLE NO.22 BICOLOR MAGA¥A',
			'preciocompra'=>'72.18',
			'precioventa'=>'180.45000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '46264',
            'descripcion'=>'CABLE NO.22 BICOLOR VOLTECH',
			'preciocompra'=>'15.02',
			'precioventa'=>'37.55',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '263',
            'descripcion'=>'CABLE NO.8',
			'preciocompra'=>'47.15',
			'precioventa'=>'117.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '340740',
            'descripcion'=>'CABLE NO.8 KEER',
			'preciocompra'=>'69.15',
			'precioventa'=>'172.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '290',
            'descripcion'=>'CABLE P/CAFETERA *',
			'preciocompra'=>'78.04',
			'precioventa'=>'195.10000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '683',
            'descripcion'=>'CABLE P/CAFETERA DAYCO',
			'preciocompra'=>'61.56',
			'precioventa'=>'153.9',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '292',
            'descripcion'=>'CABLE P/GRAB.UNIVERSAL C/RANURA *',
			'preciocompra'=>'60.66',
			'precioventa'=>'151.64999999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '288',
            'descripcion'=>'CABLE P/SOLDAR 10 M.SENC.',
			'preciocompra'=>'41.48',
			'precioventa'=>'103.69999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '286',
            'descripcion'=>'CABLE P/SOLDAR 5M.SENC.B',
			'preciocompra'=>'53.95',
			'precioventa'=>'134.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'5'
        ]);


        Producto::create([
            'codigo' => '1113',
            'descripcion'=>'CHAPA PHILLIPS 715 I IZQUIERDA CLASICA',
			'preciocompra'=>'26.86',
			'precioventa'=>'67.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '582',
            'descripcion'=>'CHAPA PHILLIPS 800 FIJA DERECHALL/PLAN',
			'preciocompra'=>'6.4',
			'precioventa'=>'16.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '583',
            'descripcion'=>'CHAPA PHILLIPS 800 FIJA IZQUIERDA LL/PLA',
			'preciocompra'=>'15.15',
			'precioventa'=>'37.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' AS-725 IF D ',
            'descripcion'=>'CHAPA PHILLIPS AS-725 IF D ABG LL/QUESO',
			'preciocompra'=>'5.92',
			'precioventa'=>'14.8',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' AS-725 IF I ',
            'descripcion'=>'CHAPA PHILLIPS AS-725-IF 1 ABG LL/QUESO',
			'preciocompra'=>'51.99',
			'precioventa'=>'129.975',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4000 AS I',
            'descripcion'=>'CHAPA PHILLIPS HS-4000 AS-6-IF-IZQUIERDA',
			'preciocompra'=>'33.06',
			'precioventa'=>'82.65',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4000 D ',
            'descripcion'=>'CHAPA PHILLIPS HS-4000-AS 6 D IF AI',
			'preciocompra'=>'11.34',
			'precioventa'=>'28.35',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4100 AS D',
            'descripcion'=>'CHAPA PHILLIPS HS-4100 AS-6 DF DERECHA',
			'preciocompra'=>'17.17',
			'precioventa'=>'42.925000000000004',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' HS-4100-AS I',
            'descripcion'=>'CHAPA PHILLIPS HS-4100-AS 6 I IF AI',
			'preciocompra'=>'34.3',
			'precioventa'=>'85.75',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' X-720 IF D',
            'descripcion'=>'CHAPA PHILLIPS X-720 IF D LLAVE TETRA',
			'preciocompra'=>'37.76',
			'precioventa'=>'94.39999999999999',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => ' X-720 IF I',
            'descripcion'=>'CHAPA PHILLIPS X-720 IF I LLAVE TETRA',
			'preciocompra'=>'5.17',
			'precioventa'=>'12.925',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '598',
            'descripcion'=>'CHAPA PHILLIPS X900 DERECHA LL/TETRA',
			'preciocompra'=>'71.18',
			'precioventa'=>'177.95000000000002',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '603',
            'descripcion'=>'CHAPA PHILLIPS X900 IZQUIERDA LL/TETRA',
			'preciocompra'=>'55.87',
			'precioventa'=>'139.67499999999998',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '386335',
            'descripcion'=>'CHAPA SANTUL TIPO/715 CLASICA DERECHA',
			'preciocompra'=>'23.07',
			'precioventa'=>'57.675',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '106908',
            'descripcion'=>'CHAROLA P/PINTAR AKSI',
			'preciocompra'=>'26.78',
			'precioventa'=>'66.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '19211',
            'descripcion'=>'CHAROLA TRUPER PARA PINTURA',
			'preciocompra'=>'34.75',
			'precioventa'=>'86.875',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'7'
        ]);


        Producto::create([
            'codigo' => '45023',
            'descripcion'=>'CLAVO CON CABEZA 3" KILO FIERO',
			'preciocompra'=>'62.46',
			'precioventa'=>'156.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44156',
            'descripcion'=>'CLAVO CON CABEZA 4 CAJA CON 25K FIERO K',
			'preciocompra'=>'57.08',
			'precioventa'=>'142.7',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '45025',
            'descripcion'=>'CLAVO CON CABEZA 4" KILO FIERO',
			'preciocompra'=>'67.03',
			'precioventa'=>'167.575',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '45026',
            'descripcion'=>'CLAVO CON CABEZA 5" BOLSA KILO FIERO',
			'preciocompra'=>'25.25',
			'precioventa'=>'63.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44124',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 2 1/2 KILO',
			'preciocompra'=>'48.56',
			'precioventa'=>'121.4',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44123',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 2" KILO',
			'preciocompra'=>'21.53',
			'precioventa'=>'53.825',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44120',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 3/4 KILO FI',
			'preciocompra'=>'11.66',
			'precioventa'=>'29.15',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44126',
            'descripcion'=>'CLAVO P/CONCRETO GALVANIZADO 3« KILO',
			'preciocompra'=>'54.05',
			'precioventa'=>'135.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44132',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 1 1/2" KILO',
			'preciocompra'=>'45.71',
			'precioventa'=>'114.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44131',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 1" KILO',
			'preciocompra'=>'18.69',
			'precioventa'=>'46.725',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44134',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 2 1/2 KILO',
			'preciocompra'=>'46.11',
			'precioventa'=>'115.275',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44133',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 2" KILO',
			'preciocompra'=>'46.42',
			'precioventa'=>'116.05000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44136',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3 1/2 POR KILO',
			'preciocompra'=>'46.52',
			'precioventa'=>'116.30000000000001',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44135',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3" KILO',
			'preciocompra'=>'38.13',
			'precioventa'=>'95.325',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44130',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3/4 POR KILO',
			'preciocompra'=>'53.2',
			'precioventa'=>'133.0',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '117130',
            'descripcion'=>'CLAVO P/CONCRETO NEGRO 3/4" 1 K',
			'preciocompra'=>'64.78',
			'precioventa'=>'161.95',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44496',
            'descripcion'=>'CLAVO SIN CABEZA 1 1/2" FIERO KILO',
			'preciocompra'=>'52.45',
			'precioventa'=>'131.125',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);


        Producto::create([
            'codigo' => '44495',
            'descripcion'=>'CLAVO SIN CABEZA 1 FIERO KILO',
			'preciocompra'=>'73.51',
			'precioventa'=>'183.775',
			'entrada'=>'0',
			'salida'=>'0',
			'stockinicial'=>'15',

            'estado'=>'ACTIVO',
			'cant_min'=>'15',
            'categoria_id'=>'3'
        ]);



    }
}
