@extends('layouts.app')

@section('content')


<table class="table table-hover table-sm">

    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> libelle</th>
            <th> prix </th>
            
           

            
            


        </tr>
    </thead>
    <tbody>
   
         
         @foreach($option   as $option )
         
          <tr>
          <td> {{$option->id}} </td>
              <td> {{$option->libelle}} </td>
              <td> {{$option->prix}} </td>
  
              
              
              


              
             
          </tr>
         @endforeach
   </tbody>
</table>
@stop