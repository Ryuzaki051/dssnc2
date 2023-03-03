<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xendata extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_exp',
        'ip_xd',
        'OS',
        'Manufacturer',
        'Hostname',
        'ultimo_Archivo',
        'Model',
        'BlankC',
        'Cinta',
        'versionSC',
        'X_Libre',
        'CintasFC',
        'C_Libre',
        'Last',
        'fechaConsulta',
        'tipo',
        'C_LibreP',
        'C_Total',
        'Serial',
        'CPU',
        'X_LibreP',
        'X_Total',
        'RAM'
    ];


    //Relacion uno a uno inversa
    public function cevem(){
        return $this->belongsTo(Cevem::class);
    }


}
