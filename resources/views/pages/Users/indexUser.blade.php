@extends('master')
@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="d-flex justify-content-between mb-2">
        <h2>Users List</h2>
        <form action="{{route('attractions.index')}}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search..." name="search" value="{{request('search')}}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
             
            </div>
        </form>            
    </div>

 <div class="card shadow-sm rounded-3 overflow-hidden">
    <div class="card-body p-0">
    <table class="table table-striped-columns mb-0">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attractions as $a)
                    <tr>
                        <td>
                            <a href="{{route('attractions.show', $a->id)}}">
                                {{ $loop->iteration }}
                            </a>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->email }}</td>
                        <td>{{ $a->password }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route ('attractions.edit', $a->id)}}" class="btn btn-warning">✏️</a>
                                <form action="{{ route ('attractions.destroy', $a->id)}}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete {{ $a->name }}?')">🗑️</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>                  
 </div>
 <a href="{{route('attractions.create')}}" class="btn btn-success">Create Destination</a>
</div>
    <div class="mt-3 d-flex justify-content-center">
    {{ $attractions->links('pagination::bootstrap-5') }}
    </div>
            </tbody>
        </table>
@endsection