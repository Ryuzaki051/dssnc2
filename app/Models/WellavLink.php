<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellavLink extends Model
{
    use HasFactory;

    protected $table="wellawlinks";

    protected $fillable=[
        'ip_wellav',
        'cevem_id'
    ];

    //Relacion uno a muchos inversa
    public function Cevem(){
        return $this->belongsTo(Cevem::class);
    }

}
