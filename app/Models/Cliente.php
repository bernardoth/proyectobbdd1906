<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','apellidos','correo','celular','ci'];

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
