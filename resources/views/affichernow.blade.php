@extends('layouts.app')

@section('content')


<table class="table table-hover table-sm">

    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> dateD</th>
            <th> dateF  </th>
            <th> idPeriode </th>
            <th> idChambre </th>
           

            
            


        </tr>
    </thead>
    <tbody>
   
         
         @foreach($reservations   as $reservation )
         
          <tr>
          <td> {{$reservation->id}} </td>
              <td> {{$reservation->dateD}} </td>
              <td> {{$reservation->dateF}} </td>
              <td> {{$reservation->idPeriode}} </td>
              <td> {{$reservation->idChambre}} </td>
              
              
              


              
             
          </tr>
         @endforeach
   </tbody>
</table>
@stop