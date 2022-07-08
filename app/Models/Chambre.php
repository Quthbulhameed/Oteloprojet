<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $table = "chambre"; 
    protected $fillable = [
       'nbCouchage' ,'porte','etage','idCategorie','baignoire','prixBase' 
   ];


    use HasFactory;
    public function categorie(){
      return $this->belongsTo('App\Categorie');
    }
  
  }

 

