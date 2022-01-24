@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Id</th>
        <th>To Pay</th>
        <th>KStatus</th>
        <th>PPS</th>
    </tr>  

    @foreach($paymentdetail as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> to_pay}}</td>
        <td>{{ $item -> status}}</td>
        <td>{{ $item -> pay_prov_serv}}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')