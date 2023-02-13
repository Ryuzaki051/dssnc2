<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FCLink extends Model
{
    use HasFactory;

    protected $table="fingerslinks";

    protected $fillable=[
        'url'
    ];

}
