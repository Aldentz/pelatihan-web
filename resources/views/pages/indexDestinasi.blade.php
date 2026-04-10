@extends('master')

@section('content')
<div class="container mt-5">
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Working Days</th>
                <th>Working Hours</th>
                <th>Ticket Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $d)
                <tr>
                   <td>
                   <a href="/destinations/{{ $d->id }}">
                    {{ $loop->iteration }}
                    </a>
                    </td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->description }}</td>
                    <td>{{ $d->location }}</td>
                    <td>{{ $d->working_days }}</td>
                    <td>{{ $d->working_hours }}</td>
                    <td>{{ $d->ticket_price }}</td>
                    <td>
                        <a href="/destination/{{ $d->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/destinations/{{ $d->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete {{ $d->name }}?')
                            ">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/destination/create" class="btn btn-success">Create Destination</a>
</div>


@endsection