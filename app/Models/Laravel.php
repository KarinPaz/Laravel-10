<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laravel extends Model
{
    use HasFactory;

    protected $table= 'laravel_10';
    
    protected $fillable =[

        'nombre',
        'email',
        'telefono',
    ];

    public $timestamps= false;
}
