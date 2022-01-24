@extends('app')
@section('content')
<table class='table'>
    <tr class='table-dark'>
        <th>Proizvod</th>
        <th>InventoryId</th>
        <th>Kategorija proizvoda</th>
    </tr>  

    @foreach($product as $item)
    <tr>
        <td>{{ $item -> prod_name }}</td>
        <td>{{ $item -> inventory_id }}</td>
        <td>{{ $item -> product_cat_id }}</td>
    </tr> 
    @endforeach
</table>
@endsection('content')