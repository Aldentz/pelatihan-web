@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row g-4">
        {{-- Gambar --}}
        <div class="col-md-5">
            <div class="card shadow-sm rounded-3">
                <img src="{{ asset('storage/image/' . $destinations->image) }}" 
                     alt="{{ $destinations->name }}" 
                     class="card-img-top rounded-top-3 object-fit-cover"
                     style="height: 350px; object-fit: cover;">
            </div>
        </div>

        {{-- Detail --}}
        <div class="col-md-7">
            <div class="card shadow-sm rounded-3 h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <h1 class="h2 fw-bold mb-0">{{ $destinations->name }}</h1>
                        <a href="{{ route('destinations.index') }}" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>

                    <p class="text-muted mb-4 fs-5">{{ $destinations->description }}</p>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <small class="text-muted">Lokasi</small>
                            <p class="mb-0 fw-semibold">{{ $destinations->location }}</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Hari Operasional</small>
                            <p class="mb-0 fw-semibold">{{ $destinations->working_days }}</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Jam Operasional</small>
                            <p class="mb-0 fw-semibold">{{ $destinations->working_hours }}</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Harga Tiket</small>
                            <p class="mb-0 fw-bold text-success">
                                Rp {{ number_format($destinations->ticket_price, 0, ',', '.') }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="{{ route('destinations.edit', $destinations->id) }}" class="btn btn-outline-primary btn-sm">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection