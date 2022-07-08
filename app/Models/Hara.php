<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hara extends Model
{
    use HasFactory;
    protected $table = "hara";
    protected $fillable = [
        'nom','age','couleur','proprieteNom'
    ];
}
