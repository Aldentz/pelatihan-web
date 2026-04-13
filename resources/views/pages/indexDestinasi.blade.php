@extends('master')

@section('content')
<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between mb-2">
        <h2>Destinations List</h2>
        <form action="/destinations" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search..." name="search" value="{{request('search')}}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
             
            </div>
        </form>  
             
    </div>

<div class="card shadow-sm rounded-3 overflow-hidden">
    <div class="card-body p-0">
    <table class="table table-striped-columns mb-0">
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
                        <div class="btn-group" role="group">
                        <a href="/destination/{{ $d->id }}/edit" class="btn btn-warning">✏️</a>
                        <form action="/destinations/{{ $d->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete {{ $d->name }}?')
                            ">🗑️
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
    <a href="/destination/create" class="btn btn-success">Create Destination</a>

</div>

   </div>
    <div class="mt-3 d-flex justify-content-center">
    {{ $destinations->links('pagination::bootstrap-5') }}
    </div>



@endsection

@push('Scripts')
<script>
    class alert {
        constructor(message) {
            this.message = message;
        }

        show() {
            alert(this.message);
        }
    }
    let alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            alertElement.style.transition = 'opacity 3s ease';
            alertElement.style.opacity = '0';
            setTimeout(() => {
                alertElement.remove();
            }, 3000);
        });
    }   
</script>
@endpush