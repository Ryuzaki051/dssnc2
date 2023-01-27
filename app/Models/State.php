<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable=[
        'state'
    ];

    public function detector(){
        return $this->hasMany('App\Models\Detector');
    }

    public function cevem(){
        return $this->hasMany('App\Models\Cevem');
    }

}