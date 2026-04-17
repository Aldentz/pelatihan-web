@extends('master')

@section('content')
<div class="container mt-5">
    <h1>{{ $attractions->name }}</h1>
    <h2>{{$attractions->destination->name }}</h2>
    <p>{{ $attractions->description }}</p>
    
</div>
@endsection