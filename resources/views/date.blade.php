<!-- @extends('layouts.app')

@section('content')


<form method="get" action="{{ route('chambre.date')}}">
  

<table class="table table-hover table-sm">



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

  <button type="submit" class="btn btn-primary">Submit</button>
  

    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> nbCouchage</th>
            <th> porte  </th>
            <th> etage </th>
            
            <th> baignoire </th>

            <th> idCategorie</th>

            <th> libelle </th> 


        </tr>
    </thead>
    <tbody>
   
         
         @foreach($chambres  as $chambre )
         
          <tr>
          <td> {{$chambre->id}} </td>
              <td> {{$chambre->nbCouchage}} </td>
              <td> {{$chambre->porte}} </td>
              <td> {{$chambre->etage}} </td>
              <td> {{$chambre->baignoire}} </td>
              <td> {{$chambre->idCategorie}} </td>

              <td> {{$categories[($chambre->idCategorie)-1]->libelle}} </td> 

              
             
          </tr>
         @endforeach
   </tbody>
</table>
@stop -->