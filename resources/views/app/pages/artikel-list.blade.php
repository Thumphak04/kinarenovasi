@extends('app.layouts.app')
{{-- @section('custom_css')
<link rel="stylesheet" href="{{ asset('assets/css/artikel.css') }}">
@endsection --}}
@section('seotag')
    <!-- SEO Meta Tags -->
    <title>Tips Renovasi Rumah & Panduan Perbaikan | KINA Renovasi - Artikel Terlengkap</title>
    <meta name="description"
        content="Kumpulan tips renovasi rumah, panduan perbaikan, dan artikel terlengkap dari ahli KINA Renovasi. Dapatkan insight terbaik untuk proyek renovasi rumah Anda di Jabodetabek.">
    <meta name="keywords"
        content="tips renovasi rumah, panduan perbaikan rumah, artikel renovasi, tips memilih kontraktor, estimasi biaya renovasi, cara renovasi rumah, KINA renovasi tips, panduan tukang bangunan">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://jasaperbaikanrumah.id/artikel">
@endsection

@section('socialtags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jasaperbaikanrumah.id/artikel">
    <meta property="og:title" content="Tips Renovasi Rumah Terlengkap - KINA Renovasi">
    <meta property="og:description"
        content="Pelajari tips renovasi rumah dari ahli KINA Renovasi. Panduan lengkap estimasi biaya, memilih material, hingga tips memilih kontraktor terpercaya.">
    <meta property="og:image" content="https://jasaperbaikanrumah.id/images/artikel-kina-renovasi-og.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://jasaperbaikanrumah.id/artikel">
    <meta name="twitter:title" content="Tips Renovasi Rumah Terlengkap - KINA Renovasi">
    <meta name="twitter:description"
        content="Panduan lengkap renovasi rumah dari ahli KINA Renovasi. Tips, trik, dan strategi terbaik untuk proyek renovasi Anda.">
    <meta name="twitter:image" content="https://jasaperbaikanrumah.id/images/artikel-kina-renovasi-twitter.jpg">
@endsection

@section('main')
<!-- Hero Section Artikel -->
<section class="hero" style="min-height: 40vh; margin-top: 76px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                
                <h1 class="hero-content mt-4">
                    Panduan Lengkap <span style="color: var(--accent-color);">Renovasi Rumah</span>
                </h1>
                <p class="lead mb-4">
                    Dapatkan tips terbaik, panduan praktis, dan insight dari para ahli KINA Renovasi untuk proyek renovasi rumah impian Anda di Jabodetabek.
                </p>
                <div class="trust-indicators">
                    <div class="trust-item">
                        <span class="number">50+</span>
                        <small>Artikel Tips</small>
                    </div>
                    <div class="trust-item">
                        <span class="number">15+</span>
                        <small>Tahun Pengalaman</small>
                    </div>
                    <div class="trust-item">
                        <span class="number">1000+</span>
                        <small>Proyek Selesai</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter & Search Section -->
<section class="section-padding" style="padding-top: 3rem;">
    <div class="container">
    

        <!-- Articles Grid -->
        <div class="row g-4">
            <!-- Artikel 1 -->
            <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('assets/image/artikel/atikel-tips-renovasi-dapur-minimalis.jpg') }}" 
                             alt="Tips Renovasi Dapur Minimalis" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: var(--accent-color); position: absolute; top: 10px; left: 10px;">
                                Tips Renovasi
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>15 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>5 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Tips Renovasi Dapur Minimalis dengan Budget Hemat
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Panduan lengkap merenovasi dapur dengan desain minimalis tanpa menguras kantong. Termasuk tips memilih material dan layout yang tepat.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>KINA Renovasi
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div>

            <!-- Artikel 2 -->
            <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('assets/image/artikel/artikel-cara-meghitung-biaya-renovasi-rumah-yang-akurat.jpg') }}" 
                             alt="Cara Menghitung Estimasi Biaya Renovasi" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: var(--whatsapp-green); position: absolute; top: 10px; left: 10px;">
                                Estimasi Biaya
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>12 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>8 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-2') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Cara Menghitung Estimasi Biaya Renovasi Rumah yang Akurat
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Pelajari metode perhitungan biaya renovasi yang tepat, termasuk RAB, markup kontraktor, dan tips menghemat biaya tanpa mengorbankan kualitas.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>KINA Renovasi
                            </small>
                        </div>
                        <a href="{{ route('artikel-2') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div>

            <!-- Artikel 3 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/memilih-kontraktor.jpg') }}" 
                             alt="Tips Memilih Kontraktor Renovasi Terpercaya" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: var(--kina-blue); position: absolute; top: 10px; left: 10px;">
                                Panduan Kontraktor
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>10 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>6 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-3') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Tips Memilih Kontraktor Renovasi Terpercaya di Jabodetabek
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Panduan lengkap memilih kontraktor yang tepat untuk proyek renovasi Anda. Termasuk checklist verifikasi dan red flags yang harus diwaspadai.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>KINA Renovasi
                            </small>
                        </div>
                        <a href="{{ route('artikel-3') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}

            <!-- Artikel 4 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/material-berkualitas.jpg') }}" 
                             alt="Panduan Memilih Material Renovasi" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: #6c757d; position: absolute; top: 10px; left: 10px;">
                                Material
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>8 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>7 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Panduan Memilih Material Renovasi Berkualitas dengan Standar SNI
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Tips memilih material yang tepat untuk renovasi rumah Anda. Mulai dari keramik, cat, hingga bahan bangunan dengan standar SNI terbaik.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>Material Expert KINA
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}

            <!-- Artikel 5 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/renovasi-kamar-mandi.jpg') }}" 
                             alt="Renovasi Kamar Mandi Modern" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: var(--accent-color); position: absolute; top: 10px; left: 10px;">
                                Tips Renovasi
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>5 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>6 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Renovasi Kamar Mandi Modern Anti Bocor dalam 7 Langkah
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Panduan step-by-step merenovasi kamar mandi dengan teknologi waterproofing terkini untuk hasil yang tahan lama dan anti bocor.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>Spesialis Plumbing KINA
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}

            <!-- Artikel 6 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/atap-bocor-musim-hujan.jpg') }}" 
                             alt="Atap Bocor Musim Hujan" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: #dc3545; position: absolute; top: 10px; left: 10px;">
                                Perbaikan Darurat
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>3 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>4 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Cara Mengatasi Atap Bocor Saat Musim Hujan dengan Cepat
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Solusi darurat dan permanen untuk mengatasi kebocoran atap di musim hujan. Termasuk bahan waterproofing yang tepat dan teknik aplikasinya.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>Expert Atap KINA
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}

            <!-- Artikel 7 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/desain-ruang-tamu.jpg') }}" 
                             alt="Desain Ruang Tamu Minimalis" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: var(--accent-color); position: absolute; top: 10px; left: 10px;">
                                Tips Renovasi
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>1 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>5 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Desain Ruang Tamu Minimalis untuk Rumah Kecil Type 36
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Ide kreatif mengoptimalkan ruang tamu sempit dengan desain minimalis yang fungsional. Termasuk tips pemilihan furniture dan warna yang tepat.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>Desainer Interior KINA
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}

            <!-- Artikel 8 -->
            {{-- <div class="col-lg-3 col-md-6">
                <article class="service-card h-100" style="text-align: left;">
                    <div class="article-thumbnail mb-3">
                        <img src="{{ asset('images/articles/perawatan-rumah.jpg') }}" 
                             alt="Jadwal Perawatan Rumah" 
                             class="img-fluid rounded"
                             style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="article-category">
                            <span class="badge" style="background: #28a745; position: absolute; top: 10px; left: 10px;">
                                Perawatan
                            </span>
                        </div>
                    </div>
                    <div class="article-meta mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>28 September 2025
                            <i class="fas fa-clock ms-2 me-1"></i>6 min baca
                        </small>
                    </div>
                    <h3 class="h5 mb-3">
                        <a href="{{ route('artikel-1') }}" 
                           style="color: var(--kina-blue); text-decoration: none;">
                            Jadwal Perawatan Rumah Bulanan & Tahunan untuk Rumah Awet
                        </a>
                    </h3>
                    <p class="mb-3" style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                        Checklist lengkap perawatan rumah rutin untuk menjaga kondisi bangunan tetap optimal. Mencegah kerusakan sebelum terjadi masalah besar.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="article-author">
                            <small style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1"></i>Maintenance Expert KINA
                            </small>
                        </div>
                        <a href="{{ route('artikel-1') }}" 
                           class="btn btn-sm" style="background: var(--accent-color); color: white;">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
            </div> --}}
        </div>

        <!-- Pagination -->
        {{-- <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Pagination artikel">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> --}}
    </div>
</section>

<!-- Call to Action Section -->
<section class="section-padding" style="background: var(--bg-secondary);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 style="color: var(--kina-blue);" class="mb-3">
                    Butuh Konsultasi Langsung untuk Proyek Renovasi Anda?
                </h2>
                <p class="lead mb-0" style="color: var(--text-secondary);">
                    Tim ahli KINA Renovasi siap membantu mewujudkan renovasi rumah impian Anda. Konsultasi gratis dan survei ke lokasi tanpa biaya!
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="https://wa.me/6281318410406?text=Halo%20KINA%20Renovasi%2C%20saya%20ingin%20konsultasi%20tentang%20renovasi%20rumah%20setelah%20membaca%20artikel%20di%20website." 
                   class="btn btn-survei btn-survei-lg" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <i class="fab fa-whatsapp me-2"></i>Konsultasi Gratis Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection