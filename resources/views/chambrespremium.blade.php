@extends('layouts.app')

@section('content')
<table class="table table-hover table-sm">




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
@stop