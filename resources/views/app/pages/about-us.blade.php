@extends('app.layouts.app')
@section('seotag')
    <!-- SEO Meta Tags -->
    <title>KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek | Survei Gratis & Garansi</title>
    <meta name="description"
        content="KINA Renovasi menyediakan jasa perbaikan rumah profesional di Jabodetabek. Survei gratis, estimasi transparan, garansi kerja. Spesialisasi renovasi, atap, plumbing, elektrikal dengan 15+ tahun pengalaman.">
    <meta name="keywords"
        content="jasa renovasi rumah jakarta, perbaikan rumah jabodetabek, tukang bangunan jakarta, renovasi rumah bekasi, perbaikan atap jakarta, KINA renovasi, jasa plumbing jakarta, kontraktor rumah">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://jasaperbaikanrumah.id/">
@endsection
@section('socialtags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jasaperbaikanrumah.id/">
    <meta property="og:title" content="KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek Terpercaya">
    <meta property="og:description"
        content="Jasa renovasi dan perbaikan rumah profesional di Jabodetabek. Survei gratis, estimasi transparan, garansi kerja. Hubungi sekarang!">
    <meta property="og:image" content="https://jasaperbaikanrumah.id/images/kina-renovasi-og.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://jasaperbaikanrumah.id/">
    <meta name="twitter:title" content="KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek">
    <meta name="twitter:description"
        content="Jasa renovasi profesional dengan survei gratis dan garansi kerja di Jabodetabek">
    <meta name="twitter:image" content="https://jasaperbaikanrumah.id/images/kina-renovasi-twitter.jpg">
@endsection

@section('main')
<section class="py-3" style="background: var(--bg-secondary); margin-top: 76px;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('index') }}" style="color: var(--text-secondary);">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: var(--kina-blue);">
                    Tentang
                </li>
            </ol>
        </nav>
    </div>
</section>
<!-- About Section KINA Renovasi - Menggunakan ID dan class khusus -->
<section id="about-kina-section" class="section-padding position-relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="about-bg-element-1"></div>
    <div class="about-bg-element-2"></div>

    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Left Column - Company Info -->
            <div class="col-lg-6">
                <div class="about-content">
                    <!-- Badge -->
                    <div class="badge-wrapper mb-4">
                        <span class="about-badge-kina">
                            <i class="fas fa-star me-2"></i>
                            Terpercaya Sejak 2009
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h2 class="display-5 fw-bold mb-4 about-title-gradient">
                        KINA Renovasi: 15+ Tahun Kepercayaan di Jabodetabek
                    </h2>

                    <!-- Description -->
                    <p class="lead mb-4 lh-lg about-description">
                        Sejak 2009, KINA Renovasi telah menjadi pilihan utama keluarga Indonesia untuk renovasi rumah berkualitas. Kami mengutamakan transparansi, kualitas, dan kepuasan pelanggan dengan sistem survei gratis yang akurat.
                    </p>

                    <!-- Stats Cards -->
                    <div class="row g-3 mb-5">
                        <div class="col-6">
                            <div class="about-stats-card">
                                <div class="about-stats-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="about-stats-content">
                                    <h3 class="about-stats-number">1000+</h3>
                                    <p class="about-stats-label">Proyek Selesai</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-stats-card">
                                <div class="about-stats-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="about-stats-content">
                                    <h3 class="about-stats-number">98%</h3>
                                    <p class="about-stats-label">Tingkat Kepuasan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Excellence Section -->
                    <div class="about-keunggulan-card">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-award me-3"></i>
                            <h5 class="mb-0">Keunggulan Tim KINA</h5>
                        </div>
                       <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-certificate"></i>
                                <span>Tukang yang ahli dan berpengalaman</span>
                            </li>
                            <li>
                                <i class="fas fa-ruler-combined"></i>
                                <span>Survey gratis dan analisis harga yang transparan</span>
                            </li>
                            <li>
                                <i class="fas fa-calculator"></i>
                                <span>Memberikan saran terbaik untuk client</span>
                            </li>
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span>Material berkualitas SNI sesuai keingin client</span>
                            </li>
                              <li>
                                <i class="fas fa-palette"></i>
                                <span>Durasi pengejeraan ontime dan realistis</span>
                            </li>
                        </ul>
                    </div>

                  
                </div>
            </div>

            <!-- Right Column - Coverage Area -->
            <div class="col-lg-6">
                <div class="coverage-wrapper">
                    <div class="coverage-header text-center mb-5">
                        <h2 class="h3 fw-bold about-title-gradient mb-3">
                            Wilayah Layanan KINA Renovasi
                        </h2>
                        <p class="lead about-coverage-description">
                            Melayani seluruh wilayah Jabodetabek dengan tim profesional dan respon cepat
                        </p>
                    </div>

                    <div class="about-coverage-grid">
                        <div class="about-wilayah-card">
                            <div class="about-wilayah-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="about-wilayah-content">
                                <h5>DKI Jakarta</h5>
                                <p>Jakarta Pusat, Utara, Selatan, Barat, Timur</p>
                            </div>
                            <div class="about-wilayah-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="about-wilayah-card">
                            <div class="about-wilayah-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <div class="about-wilayah-content">
                                <h5>Bogor</h5>
                                <p>Kota & Kabupaten Bogor, Cibinong, Sentul</p>
                            </div>
                            <div class="about-wilayah-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="about-wilayah-card">
                            <div class="about-wilayah-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="about-wilayah-content">
                                <h5>Depok</h5>
                                <p>Seluruh wilayah Kota Depok</p>
                            </div>
                            <div class="about-wilayah-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="about-wilayah-card">
                            <div class="about-wilayah-icon">
                                <i class="fas fa-city"></i>
                            </div>
                            <div class="about-wilayah-content">
                                <h5>Tangerang</h5>
                                <p>Tangerang, Tangerang Selatan, BSD</p>
                            </div>
                            <div class="about-wilayah-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>

                        <div class="about-wilayah-card">
                            <div class="about-wilayah-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="about-wilayah-content">
                                <h5>Bekasi</h5>
                                <p>Kota & Kabupaten Bekasi, Cikarang</p>
                            </div>
                            <div class="about-wilayah-badge">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>
                      <!-- CTA Buttons -->
                    <div class="about-cta-buttons">
                        <a href="https://wa.me/6281318410406?text=Saya%20ingin%20konsultasi%20dan%20jadwalkan%20survei%20untuk%20perbaikan%20rumah%20dengan%20KINA%20Renovasi." 
                           class="about-btn-whatsapp" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fab fa-whatsapp me-2"></i>
                            Konsultasi & Survei Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection