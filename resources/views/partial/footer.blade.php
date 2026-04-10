{{-- partial/footer.blade.php --}}
<footer class="footer-bali">
    <!-- Main Footer -->
    <div class="container">
        <div class="row g-4">
            <!-- Brand & Description -->
            <div class="col-lg-4 col-md-6">
                <div class="mb-4">
                    <h3 class="fw-bold mb-3">
                        <i class="fas fa-palm-tree me-2 text-warning"></i>
                        BaliTour
                    </h3>
                    <p class="text-light opacity-90 mb-0">
                        Jelajahi keindahan Pulau Dewata dengan paket wisata terbaik. 
                        Dari pantai eksotis hingga budaya yang kaya.
                    </p>
                </div>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="fw-bold mb-4 text-warning">Menu Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/" class="text-light text-decoration-none">🏠 Home</a></li>
                    <li class="mb-2"><a href="/destinasi" class="text-light text-decoration-none">🗺️ Destinasi</a></li>
                    <li class="mb-2"><a href="/paket" class="text-light text-decoration-none">🏖️ Paket Tour</a></li>
                    <li class="mb-2"><a href="/galeri" class="text-light text-decoration-none">📸 Galeri</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-4 text-warning">Layanan Kami</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none">✈️ Tiket Pesawat</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none">🚗 Rental Mobil</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none">🏨 Hotel Resort</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none">🚌 Tour Guide</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-4 text-warning">Hubungi Kami</h5>
                <div class="mb-3">
                    <i class="fas fa-phone me-2"></i>
                    <a href="tel:+628123456789" class="text-light text-decoration-none">+62 812-7789-5708</a>
                </div>
                <div class="mb-3">
                    <i class="fas fa-envelope me-2"></i>
                    <a href="mailto:aldenzafani748@gmail.com" class="text-light text-decoration-none">aldenzafani748@gmail.com</a>
                </div>
                <div class="mb-3">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <span class="text-light">Jl. Pantai Kuta No.88, Bali</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Bottom -->
    <div class="border-top border-light border-opacity-20 mt-5 pt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-light opacity-75">
                        © 2026 <strong>BaliTour</strong>. Semua hak dilindungi. 
                        <i class="fas fa-heart text-danger ms-1"></i> Dibuat dengan ❤️ untuk Bali
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-light opacity-75">
                        <i class="fas fa-code me-1"></i> Web Developer: Aldent🧑‍💻
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.footer-bali {
    background: linear-gradient(135deg, #2C5530 0%, #1a3c20 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.footer-bali::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #FFD23F, #FF6B35, #F7931E, #FFD23F);
    animation: gradientShift 3s ease-in-out infinite;
}

@keyframes gradientShift {
    0%, 100% { transform: translateX(-100%); }
    50% { transform: translateX(100%); }
}

.footer-bali h3, .footer-bali h5 {
    position: relative;
}

.footer-bali h3::after, .footer-bali h5::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 40px;
    height: 3px;
    background: linear-gradient(90deg, #FFD23F, #FF6B35);
    border-radius: 2px;
}

.footer-bali a:hover {
    color: #FFD23F !important;
    transform: translateX(5px);
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: rgba(255,255,255,0.2) !important;
    transform: translateY(-2px) scale(1.1);
}

.list-unstyled li {
    transition: all 0.3s ease;
}

.list-unstyled li:hover {
    padding-left: 10px;
}

@media (max-width: 768px) {
    .footer-bali {
        padding: 2rem 0 1rem !important;
    }
    
    .footer-bali h3, .footer-bali h5 {
        font-size: 1.2rem;
    }
}
</style>