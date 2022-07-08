@extends('layouts.app')
@section('content')

<div class="container">
<form method="post" action="{{ route('hara.store')}}">
  

@csrf





 
    <label for="nom">Nom de cheval </label>
    <input type="text" class="form-control" name=nom id="nom" placeholder="Nom" required>
  </div>

  <div class="form-group">
    <label for="age">Son Age</label>
    <input type="number" class="form-control" name=age  id="age" value="0" min="0" max="80" required>
  </div>


  <div class="form-group">
    <label for="nom">Couleur principal </label>
    <input type="text" class="form-control" name=couleur id="nom" placeholder="Nom" required>
  </div>


   <div class="form-group">
    <label for="nom">le Nom de propriétaire  </label>
    <input type="text" class="form-control" name=proprieteNom id="nom" placeholder="Nom" required>
  </div>


  <div class="form-group">
    <label for="nom"> le Prenom de propriétaire </label>
    <input type="text" class="form-control" name=proprietePrenom id="nom" placeholder="Nom" required>
  </div> 
  <div class="form-group">
            <label for="nom propriétaire">test1</label>
            <input type="name" name="nompro" class="form-control" id="exampleInputNom1" placeholder="nom du propriétaire">
        </div>
        <div class="form-group">
            <label for="prenom propriétaire">test2</label>
            <input type="name" name="prenompro" class="form-control" id="exampleInputPrenom1" placeholder="prénom du propriétaire">
        </div>
        </select>


      

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>


  <table class="table table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> nom</th>
            
            <th> age  </th>
            <th> couleur </th>
            <th> proprieteNom</th>
            
        </tr>
    </thead>
    <tbody>
   
         @foreach($haras as $hara)
          <tr>
          <td> {{$hara->id}} </td>
              <td> {{$hara->nom}} </td>
              
              <td> {{$hara->age}} </td>
              <td> {{$hara->couleur}} </td>
              <td> {{$hara->proprieteNom}} </td>
             
          </tr>
         @endforeach
   </tbody>
</table>
</form>
</div>
@stop