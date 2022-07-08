<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hara extends Model
{
    use HasFactory;
    protected $table = "hara"; 
    protected $fillable = [
       'nomcheval' ,'age','couleurprincipal','nomdeproprietaire','prenomdeproprietaire'	 
   ];



}
