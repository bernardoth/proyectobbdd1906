<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['codigo','descripcion','stock','precioventa','preciocompra','stockinicial','estado','entrada','salida','cant_min','categoria_id'];

    public function ventas()
    {
        return $this->belongsToMany(DetalleVenta::class);
    }

    public function detalleCompra()
    {
        return $this->hasMany(DetalleCompra::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected function stock(): Attribute
    {
        return new Attribute(
            get: function ($value) {
                return $this->stockinicial+$this->entrada-$this->salida;
            }
        );
    }


}
