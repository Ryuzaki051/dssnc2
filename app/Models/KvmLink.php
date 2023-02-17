<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KvmLink extends Model
{
    use HasFactory;

    protected $table="kvmlinks";

    protected $fillable=[
        'ip_kvm','cevem_id'
    ];


    //Relacion uno a uno inversa
    public function Cevem(){
        return $this->belongsTo(Cevem::class);
    }

}
