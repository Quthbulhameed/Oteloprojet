@extends('layouts.app')
@section('content')

<div class="container">
<form method="post" action="{{ route('reservation.store')}}">
@csrf

<div class="form-group">
    <label for="start">Date debut</label>
    <input type="date" class="form-control" name=dateDebut id="start" placeholder="date">
    @error('dateDebut')
        <div class="alert alert-danger mt-2">
        {{$message}}  mon message perso
        </div>
        @enderror
  </div>

  <div class="form-group">
    <label for="start">Date fin</label>
    <input type="date" class="form-control" name=dateFin id="start" placeholder="date">
    
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <label for="sel1">Categorie</label>
  <select name="idCategorie" class="form-control" id="sel1">
    <option value=1>standard</option>
    <option value=2>confort</option>
    <option value=3>premium</option>
    <option value=4>luxe</option>
  </select>

  <div class="form-group">
    <label for="nom">sejour  </label>
    <input type="text" class="form-control" name=sejour  placeholder="categories" required>
  </div>
  

<div class="form-group">
  <label for="sel1">periode:</label>
  <select name="idperiode" class="form-control" id="sel1">
    <option value=1>basse</option>
    <option value=2>moyenne</option>
    <option value=3>haute</option>
    <a class="btn btn_primary" href="chambres">bConsulter la liste des chambres</a>
    <a class="btn btn_primary" href="disponiblite">la liste des chambres</a>
    

  </select>
  <a class="btn btn_primary" href="chambres" style="background-color:Blue ; border-color:blue ; color:white">Consulter la liste des chambres</a>
  <a class="btn btn_primary" href="devoir" style="background-color:Blue ; border-color:blue ; color:white">Du moins cher au plus cher</a>
  <a class="btn btn_primary" href="trois" style="background-color:Blue ; border-color:blue ; color:white">Description mer</a>
    <a class="btn btn_primary" href="mettre" style="background-color:Blue ; border-color:blue ; color:white">Ajouter une categorie</a>
    <a class="btn btn_primary" href="disponibilites" style="background-color:Blue ; border-color:blue ; color:white">Rechercher des chambres disponibles</a>

 
 
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop