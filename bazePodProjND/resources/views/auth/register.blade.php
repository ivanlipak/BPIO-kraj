@extends('app')

@section('content')

<form class="col-6 mx-auto mt-5" method="POST" action="{{ route('register.costum') }}">
    {{ csrf_field() }}
    
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Surname</label>
        <input name="surname" type="text" class="form-control" id="surname">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">UserName</label>
        <input name="username" type="text" class="form-control" id="username">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password">
    </div>


    <button type="submit" class="btn btn-success float-right">Register</button>
</form>

@endsection