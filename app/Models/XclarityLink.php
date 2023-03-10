<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XclarityLink extends Model
{
    use HasFactory;

    protected $table="xclaritylinks";

    protected $fillable=[
        'ip_xclarity',
        'cevem_id'
    ];

    //Relacion uno a muchos inversa
    public function cevem(){
        return $this->belongsTo(Cevem::class);
    }

}
