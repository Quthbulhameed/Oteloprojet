<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propri extends Model
{
    use HasFactory;
    protected $table = "propri";
    protected $fillable = [
        'nompro','prenompro'
    ];
}
