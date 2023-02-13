<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XDLink extends Model
{
    use HasFactory;

    protected $table="xdlinks";

    protected $fillable=[
        'ip_xd',
        'AS',
        'EM',
        'ip_libreria'
    ];

}
