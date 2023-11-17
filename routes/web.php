<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categorias;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\Personas;
use App\Http\Livewire\Productos;
use App\Http\Livewire\Proveedors;
use App\Http\Livewire\Venta\Ventas;
use App\Http\Livewire\Venta\Reportevs;
use App\Http\Livewire\Formulario\Formulario;
use App\Http\Livewire\Compra\Compras;
use App\Http\Livewire\Fcompra\Formularioc;
use App\Http\Livewire\Report\Reports;
use App\Http\Livewire\User\Users;
use App\Http\Livewire\Inventario\Inventarios;

use App\Http\Controllers\ExportController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentasreporteController;
use App\Http\Controllers\MinimosController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bienvenida');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/categoria/categorias',Categorias::class);
    Route::get('/cliente/clientes',Clientes::class);
    //Route::get('/personaclie/clientes',Personas::class);
    Route::get('/producto/productos',Productos::class);
    Route::get('/proveedor/proveedors',Proveedors::class);
    //Route::get('/personaprov/proveedors',Personas::class);

    Route::get('/venta/ventas',Ventas::class);
    Route::get('/venta/reportevs',Reportevs::class);

    Route::get('/formulario/formulario/{valor}',Formulario::class)->name('frm');
    Route::get('/formulario/formulario',Formulario::class)->name('frm');
    Route::get('/compra/compras',Compras::class);
    Route::get('/fcompra/formularioc/{valor}',Formularioc::class)->name('frmcompra');
    Route::get('/fcompra/formularioc',Formularioc::class);
    Route::get('/user/users',Users::class);
    Route::get('/report/reports',Reports::class);
    Route::get('/inventario/inventarios',Inventarios::class);

    //Controladores Reportes

    //Route::get('/report/reports/que/{id}',[ExportController::class,'miReporte']);
    Route::get('/notaventa/{id}',[ExportController::class,'miReporte']);
    Route::get('/reportesventas/{fechainicio}/{fechafin}',[VentasreporteController::class,'reportesVentas']);
    Route::get('/inventarioreporte/{fechainicio}/{fechafin}/{id}',[InventarioController::class,'inventarioReporte']);
    Route::get('/minimos',[MinimosController::class,'stockminimo']);



});



