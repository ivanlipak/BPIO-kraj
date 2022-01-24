@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Broj sesije</th>
        <th>Proizvod</th>
        <th>Količina</th>
    </tr>  

    @foreach($cartitem as $item)
    <tr>
        <td>{{ $item -> session_id }}</td>
        <td>{{ $item -> product -> prod_name }}</td>
        <td>{{ $item -> amount }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')