@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>ID USERA</th>
        <th>TOTAL</th>
    </tr>  

    @foreach($shoppingsession as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> user -> username }}</td>
        <td>{{ $item -> total}}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')