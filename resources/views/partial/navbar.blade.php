<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
    <div class="container px-4">
        {{-- Logo --}}
        <a class="navbar-brand fw-bold fs-4" href="/">
            <i class="fas fa-palm-tree text-warning me-2"></i>
            DentzTour
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinasi*') ? 'active' : '' }}" href="/destinasi">
                        <i class="fas fa-ticket-alt me-1"></i> Ticket
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations*') ? 'active' : '' }}" href="{{ route('destinations.index') }}">
                        <i class="fas fa-map-marker-alt me-1"></i> Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                        <i class="fas fa-users me-1"></i> Users
                    </a>
                </li>
            </ul>

            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-4 fw-semibold">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>