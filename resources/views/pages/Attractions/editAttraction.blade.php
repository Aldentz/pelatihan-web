@extends('master')
@section('content')
<form action="{{route('attractions.update', $attraction->id )}}" method="post" class="form-floating container mt-5">
    @csrf
    @method('PUT')
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name" value="{{ $attraction->name }}">
        <label for="floatingInput">Nama User</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" id="" class="form-control" placeholder="Description">{{ $destinations->description }}</textarea>
        <label for="floatingPassword">Description</label>
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>
@endsection