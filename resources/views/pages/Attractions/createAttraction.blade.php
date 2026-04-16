@extends('master')
@section('content')
    <form action="{{route('attractions.create')}}" method="post" class="form-floating container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
           @method('PUT')
        <div class="col-12">
            <label for="destination_id" class="from-label">destination</label>
            <select id="destination_id" name="destination_id" class="form-control " required>
                <option value="">Select Destination</option>
                @foreach ($destinations as $destination)
                <option value="{{ $destination->id}}" {{ old('destination_id') ==
                $destination->id ? 'selected' : ''}}>
                    {{ $destination->name }}
                </option>
                @endforeach
            </select>
            @error('destination_id')
            <div class="invalid-feedback">{{ $message }}</div>    
            @enderror
        </div>  
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name"
               >
            <label for="floatingInput">Nama User</label>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea name="description" id="" class="form-control" placeholder="Description"></textarea>
            <label for="floatingPassword">Description</label>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection
