<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','apellidos','correo','celular','ci','tipo'];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
