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
        return $this->belongsTo(State::class);
    }

    //Relacion uno a uno 
    public function fc2(){
        return $this->hasOne(FCLink::class);
    }

    public function xendatalnk(){
        return $this->hasOne(XDLink::class);
    }

    public function kvm(){
        return $this->hasOne(KvmLink::class);
    }

    //Relacion uno a muchos
    public function detector(){
        return $this->hasMany(Detector::class);
    }


    public function wellav(){
        return $this->hasMany(WellavLink::class);
    }

    public function xclarity(){
        return $this->hasMany(XclarityLink::class);
    }

    public function dmp(){
        return $this->hasMany(DmpLink::class);
    }

    public function atx(){
        return $this->hasMany(AtxLink::class);
    }


}