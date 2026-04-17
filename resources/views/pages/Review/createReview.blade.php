@extends('master')
@section('content')
    <form action="{{ route('reviews.store') }}" method="post" class="form-floating container mt-5">
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
        <div class="col-12">
            <label for="attraction_id" class="from-label">destination</label>
            <select id="attraction_id" name="attraction_id" class="form-control " required>
                <option value="">Select Comment</option>
                @foreach ($attractions as $attraction)
                <option value="{{ $attraction->id}}" {{ old('attraction_id') ==
                $attraction->id ? 'selected' : ''}}>
                    {{ $attraction->name }}
                </option>
                @endforeach
            </select>
            @error('attraction_id')
            <div class="invalid-feedback">{{ $message }}</div>    
            @enderror
        </div>  
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" id="floatingInput" placeholder="Asia Heritage" name="name"
               >
            <label for="floatingInput">Nama Reviewer</label>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <textarea name="comment" id="" class="form-control" placeholder="comment"></textarea>
            <label for="floatingPassword">Comment</label>
        </div>
        <button type="submit" class="btn btn-primary">Create comment</button>
    </form>
@endsection
