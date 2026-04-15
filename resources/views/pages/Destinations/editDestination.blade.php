@extends('master')

@section('content')
<form action="{{route('destinations.update', $destinations->id)}}" method="post" class="form-floating container mt-5">
    @csrf
    @method("put")
    <div class="form-floating mb-3 ">
        <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name" value="{{ $destinations->name }}">
        <label for="floatingInput">Nama Destinasi</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" id="" class="form-control" placeholder="Description">{{ $destinations->description }}</textarea>
        <label for="floatingPassword">Description</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Pekanbaru" name="location" value="{{ $destinations->location }}">
        <label for="floatingInput">Lokasi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Monday - Sunday" name="working_days" value="{{ $destinations->working_days }}">
        <label for="floatingInput">Hari Operasional</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="08.00 - 17.00" name="working_hours" value="{{ $destinations->working_hours }}">
        <label for="floatingInput">Jam Operasional</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="Rp 100.000" name="ticket_price" value="{{ $destinations->ticket_price }}">
        <label for="floatingInput">Harga Tiket</label>
    </div>
    <button type="submit" class="btn btn-primary">Update Destination</button>
</form>

@endsection