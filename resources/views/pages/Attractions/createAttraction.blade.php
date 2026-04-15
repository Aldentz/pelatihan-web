@extends('master')
@section('content')
    <form action="/attractions" method="post" class="form-floating container mt-5">
        @csrf
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name">
            <label for="floatingInput">Nama User</label>
        </div>
        <div class="form-floating mb-3">
             <textarea name="description" id="" class="form-control" placeholder="Description"></textarea>
             <label for="floatingPassword">Description</label>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection