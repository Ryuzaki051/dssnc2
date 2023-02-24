<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detector extends Model
{
    use HasFactory;

    protected $fillable=[
        'ip_detector',
        'mam_prcnt',
        'storage_prcnt',
        'opt_prcnt',
        'ram',
        'cpu',
        'cant_hilos',
        'peticiones'
    ];

    //Relacion uno a muchos inversa
    public function cevem(){
        return $this->belongsTo(Cevem::class);
    }

}
