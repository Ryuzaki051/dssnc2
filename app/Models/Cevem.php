<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cevem extends Model
{
    use HasFactory;

    const ACTIVO=1;
    const APAGADO=0;

    protected $fillable=[
         'cevem', 'ip'
    ];

    //Relacion uno a muchos inversa
    public function estado(){
        return $this->belongsTo('App\Models\State');
    }

}