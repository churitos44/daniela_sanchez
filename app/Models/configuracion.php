<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class configuracion extends Model
{
    use HasFactory;

    public function usuario(){
        return $this-> hasOne(Usuario::class);
    }
}
