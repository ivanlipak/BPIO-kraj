@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Id</th>
        <th>User id</th>
        <th>payment id</th>
        <th>total_price</th>
    </tr>  

    @foreach($orderdetail as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> users_id }}</td>
        <td>{{ $item -> payment_id }}</td>
        <td>{{ $item -> total_price }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')