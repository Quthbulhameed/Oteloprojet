@extends('layouts.app')

@section('content')
<form method="get" action="{{ route('chambre.indexcategorie')}}">

<table class="table table-hover table-sm">

<label for="sel1">Categoie</label>
  <select name="idCategorie" class="form-control" id="sel1">
    <option value=1>standard</option>
    <option value=2>confort</option>
    <option value=3>premium</option>
    <option value=4>luxe</option>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> nbCouchage</th>
            <th> porte  </th>
            <th> etage </th>
            <th> baignoire </th>

            <th> idCategorie</th>
            <th> prixBase</th>

            <th> libelle </th> 
            <th> description </th>
            


        </tr>
    </thead>
    <tbody>
   
         
         @foreach($chambres  and $categories as $chambre )
         
          <tr>
          <td> {{$chambre->id}} </td>
              <td> {{$chambre->nbCouchage}} </td>
              <td> {{$chambre->porte}} </td>
              <td> {{$chambre->etage}} </td>
              <td> {{$chambre->baignoire}} </td>
              <td> {{$chambre->idCategorie}} </td>
              <td> {{$chambre->prixBase}}</td>

              <td> {{$categories[($chambre->idCategorie)-1]->libelle}} </td> 
              <td> {{$chambre->description}}</td>


              
             
          </tr>
         @endforeach
   </tbody>
</table>
@stop