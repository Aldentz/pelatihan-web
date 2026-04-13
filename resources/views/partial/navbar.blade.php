{{-- partial/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-bali fixed-top">
    <div class="container-fluid px-4">
        <!-- Logo Brand -->
        <a class="navbar-brand fw-bold" href="/">
            <i class="fas fa-palm-tree me-2"></i>
            <span>🌴 DentzTour</span>
        </a>

        <!-- Toggler Mobile -->
        <button class="navbar-toggler border-0 shadow-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home*') ? 'active' : '' }}" href="/">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinasi*') ? 'active' : '' }}" href="/destinasi">
                        <i class="fas fa-map-marker-alt me-1"></i> Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations*') ? 'active' : '' }}" href="/destinations">
                        <i class="fas fa-umbrella-beach me-1"></i> Paket Tour
                    </a>
                </li>            
            </ul>

            <!-- Right Buttons -->
            <div class="d-flex gap-2">
                <!-- Search Button -->
                <button class="btn btn-outline-bali btn-sm d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#searchCollapse">
                    <i class="fas fa-search"></i>
                </button>

                <!-- Auth Buttons -->
                <a href="/login" class="btn btn-outline-bali btn-sm">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </a>
                <a href="/register" class="btn btn-bali btn-sm">
                    <i class="fas fa-user-plus me-1"></i> Daftar
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Search Collapse -->
    <div class="collapse mt-2 px-4" id="searchCollapse">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari destinasi Bali...">
            <button class="btn btn-bali" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</nav>

<style>
.navbar-bali {
    transition: all 0.3s ease;
}

.navbar-bali.scrolled {
    background: rgba(255,255,255,0.98) !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.nav-link {
    color: #555 !important;
    font-weight: 500;
    padding: 0.75rem 1.25rem !important;
    border-radius: 25px;
    margin: 0 0.25rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.5s;
}

.nav-link:hover::before {
    left: 100%;
}

.nav-link:hover,
.nav-link.active {
    color: #FF6B35 !important;
    background: rgba(255,107,53,0.1);
    transform: translateY(-2px);
}

.btn-bali {
    background: linear-gradient(135deg, #FF6B35, #F7931E) !important;
    border: none !important;
    color: white !important;
    padding: 0.5rem 1.25rem !important;
    border-radius: 25px !important;
    font-weight: 500 !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 4px 15px rgba(255,107,53,0.3) !important;
}

.btn-bali:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 25px rgba(255,107,53,0.4) !important;
    color: white !important;
}

.btn-outline-bali {
    color: #FF6B35 !important;
    border-color: #FF6B35 !important;
    padding: 0.5rem 1.25rem !important;
    border-radius: 25px !important;
    font-weight: 500 !important;
    transition: all 0.3s ease !important;
}

.btn-outline-bali:hover {
    background: #FF6B35 !important;
    color: white !important;
    transform: translateY(-2px) !important;
}

.navbar-toggler {
    border: 1px solid rgba(255,107,53,0.3) !important;
    border-radius: 10px !important;
    padding: 0.5rem !important;
}

.navbar-toggler:focus {
    box-shadow: 0 0 0 0.2rem rgba(255,107,53,0.25) !important;
}

/* Mobile Menu Styling */
@media (max-width: 991px) {
    .navbar-collapse {
        background: rgba(255,255,255,0.98);
        backdrop-filter: blur(15px);
        border-radius: 15px;
        margin-top: 1rem;
        padding: 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .nav-link {
        margin: 0.5rem 0 !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar-bali');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
</script>