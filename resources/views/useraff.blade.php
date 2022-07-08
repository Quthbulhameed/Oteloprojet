@extends('layouts.app')
@section('content')

<table class="table table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th> id</th>
            <th> name</th>
            
            <th> email  </th>
            
        </tr>
    </thead>
    <tbody>
   
         @foreach($users as $user)
          <tr>
          <td> {{$user->id}} </td>
              <td> {{$user->name}} </td>
              
              <td> {{$user->email}} </td>
             
          </tr>
         @endforeach
   </tbody>
</table>
</form>
</div>
@stop