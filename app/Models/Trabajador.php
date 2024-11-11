<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajadores';

    public function trabajador()
    {
    return $this->belongsTo(Trabajador::class);   
    }
}
