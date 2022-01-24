@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>Username</th>
        <th>Adresa</th>
        <th>Grad</th>
        <th>Post_br</th>
    </tr>  

    @foreach($useraddress as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> user -> username }}</td>
        <td>{{ $item -> address1 }}</td>
        <td>{{ $item -> city }}</td>
        <td>{{ $item -> post_nr }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')