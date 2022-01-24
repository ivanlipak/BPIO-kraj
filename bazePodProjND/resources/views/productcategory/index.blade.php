@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>ID</th>
        <th>Kategorija</th>
        <th>Opis kategorije</th>
    </tr>  

    @foreach($productcategory as $item)
    <tr>
        <td>{{ $item -> id }}</td>
        <td>{{ $item -> cat_name }}</td>
        <td>{{ $item -> opis }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')