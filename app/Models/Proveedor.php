<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['numeroDoc','nombres','apellidos','correo','cinit','direccion','celular'];

    public function compra()
    {
        return $this->hasMany(Compra::class);
    }

}
