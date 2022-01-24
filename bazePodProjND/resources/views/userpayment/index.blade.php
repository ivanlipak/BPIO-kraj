@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>User ID</th>
        <th>Kartica</th>
        <th>Provider</th>
        <th>Broj Računa</th>
        <th>Exp date</th>
    </tr>  

    @foreach($userpayment as $item)
    <tr>
        <td>{{ $item -> id}}</td>
        <td>{{ $item -> users_id}}</td>,
        <td>{{ $item -> payment_type}}</td>
        <td>{{ $item -> provider}}</td>
        <td>{{ $item -> acc_number}}</td>
        <td>{{ $item -> expiry}}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')