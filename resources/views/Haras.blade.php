@extends('layouts.app')
@section('content')

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