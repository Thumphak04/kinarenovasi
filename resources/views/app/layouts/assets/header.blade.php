<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar" role="navigation" aria-label="Navigasi utama">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}" aria-label="KINA Renovasi - Beranda">
            <img src="{{ asset('assets/image/kina-renovasi-logo.jpg') }}" alt="KINA Renovasi Logo" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    {{-- Tautan ini aktif jika nama route saat ini adalah 'index' --}}
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}" aria-current="page">Beranda</a>
                </li>
                <li class="nav-item">
                    {{-- Tautan ini aktif jika nama route saat ini adalah 'layanan' --}}
                    <a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a>
                </li>
                <li class="nav-item">
                    {{-- Pastikan Anda membuat route dengan nama 'portofolio' agar ini berfungsi --}}
                    <a class="nav-link {{ request()->routeIs('portofolio') ? 'active' : '' }}"href="{{ route('portofolio') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                    {{-- Tautan ini aktif jika nama route saat ini adalah 'tentang' --}}
                    <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    {{-- Tautan ini aktif jika nama route diawali dengan 'artikel' (misal: 'artikel', 'artikel-1', dll.) --}}
                    <a class="nav-link {{ request()->routeIs('artikel*') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                </li>
            </ul>
            <a href="https://wa.me/6281318410406?text=Halo%20KINA%20Renovasi%2C%20saya%20ingin%20menjadwalkan%20survei%20perbaikan%20rumah." class="btn btn-survei" target="_blank" rel="noopener noreferrer" aria-label="Hubungi kami via WhatsApp untuk jadwalkan survei">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>Jadwalkan Survei
            </a>
        </div>
    </div>
</nav>
