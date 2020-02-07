<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = "guide";
    
    protected $fillable = [
        'name', 'description','location',
    ];
}
