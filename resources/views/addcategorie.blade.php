@extends('layouts.app')

@section('content')


<form method="post" action="{{ route('addcategorie.addcategorie')}}">
  
@csrf

<table class="table table-hover table-sm">

<div class="form-group">
    <label for="nom">id </label>
    <input type="text" class="form-control" name=id  placeholder="categories" required>
  </div>

  

<div class="form-group">
    <label for="nom">categorie </label>
    <input type="text" class="form-control" name=libelle id="idCategorie" placeholder="categories" required>
  </div>




  
  

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
@stop