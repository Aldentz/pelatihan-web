@extends('master')
@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-2">
            <h2>Comment List</h2>
            <form action="{{ route('reviews.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="search..." name="search"
                        value="{{ request('search') }}">
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
                                <th>Attraction</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $r)
                                <tr>
                                    <td>
                                        <a href="{{ route('reviews.show', $r->id) }}">
                                            {{ $loop->iteration }}
                                        </a>
                                    <td>{{ $r->attraction->name}}</td>
                                    <td>{{ $r->name }}</td>
                                    <td>{{ $r->comment }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('reviews.edit', $r->id) }}" class="btn btn-warning">✏️</a>
                                            <form action="{{ route('reviews.destroy', $r->id) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are You Sure To Delete {{ $r->name }}?')">🗑️</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <a href="{{ route('reviews.create') }}" class="btn btn-success">Add comment</a>
    </div>
    </tbody>
    </table>
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
