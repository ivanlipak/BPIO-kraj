@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Id</th>
        <th>Količina</th>
        <th>Actions</th>
    </tr>  

    @foreach($inventory as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->quantity }}</td>
        <td><a class="btn btn-outline-primary mr-2" href="">Edit</a>
        <a class="btn btn-outline-danger" href="{{ route('inventory.destroy', ['inventory' => $item->id]) }}">Delete</a></td>
    </tr> 
    @endforeach
</table>
@endsection('content')