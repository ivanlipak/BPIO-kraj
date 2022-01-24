@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Ime</th>
        <th>Username</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>  

    @foreach($user as $item)
    <tr>
        <td>{{ $item -> name }}</td>
        <td>{{ $item -> username }}</td>
        <td>{{ $item -> email }}</td>
        <td><a class="btn btn-outline-primary mr-2" href="">Edit</a>
        <a class="btn btn-outline-danger" href="{{ route('user.destroy', ['user' => $item->id]) }}">Delete</a></td>
    </tr> 
    @endforeach
</table>
@endsection('content')