<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    
    protected $fillable = [
        'numero',
        'largura',
        'altura',
        'quantidade_inimigos',
    ];
    
    use HasFactory;
}
