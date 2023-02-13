<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmpLink extends Model
{
    use HasFactory;

    protected $table="dmplinks";

    protected $fillable=[
        'ip_dmp',
        'cevem_id'
    ];

}
