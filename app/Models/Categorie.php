<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categorie"; 
    protected $fillable = [
       'id' ,'libelle'
   ];
   //10/03
   public function categorie(){
    return $this->belongsTo('App\Categorie');
  }
}


