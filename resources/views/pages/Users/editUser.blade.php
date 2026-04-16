@extends('master')
@section('content')
<form action="{{route('users.update', $user->id )}}" method="post" class="form-floating container mt-5">
    @csrf
    @method('PUT')
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name" value="{{ $user->name }}">
        <label for="floatingInput">Nama User</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="user@example.com" name="email" value="{{ $user->email }}">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>
@endsection