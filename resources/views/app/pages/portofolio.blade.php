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
    <meta property="og:image" content="https://jasaperbaikanrumah.id/image/kina-renovasi-logo.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://jasaperbaikanrumah.id/">
    <meta name="twitter:title" content="KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek">
    <meta name="twitter:description"
        content="Jasa renovasi profesional dengan survei gratis dan garansi kerja di Jabodetabek">
    <meta name="twitter:image" content="https://jasaperbaikanrumah.id/image/kina-renovasi-logo.jpg">
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
                    Portofolio
                </li>
            </ol>
        </nav>
    </div>
</section>
   <!-- Portfolio Section -->
    <section class="section-padding" style="background: var(--bg-secondary);">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio Proyek KINA Renovasi</h2>
                <p>Lihat hasil kerja berkualitas dari berbagai proyek renovasi di Jabodetabek yang dimulai dengan survei
                    profesional</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/portofolio-kina-renovasi-full-renovasi-rumah.png') }}"
                            alt="Proyek renovasi atap genteng KINA di Jakarta Selatan">
                        <div class="portfolio-overlay">
                            <h5>Renovasi Rumah Full</h5>
                            <p>Jakarta Selatan</p>
                            <small>Selesai dalam 3 Bulan</small>
                        </div>
                        <h6 style="text-align: center">Renovasi Rumah Full-Jakarta Selatan </h6>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/portofoilo-kina-renovasi-dapur.png') }}"
                            alt="Renovasi dapur modern KINA di Bekasi">
                        <div class="portfolio-overlay">
                            <h5>Renovasi Dapur Modern</h5>
                            <p>Bekasi</p>
                            <small>Desain custom • Kitchen set built-in</small>
                        </div>
                        <h6 style="text-align: center">Renovasi Dapur Modern </h6>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/portofolio-kina-renovasi-full-renovasi-rumah-modern.png') }}"
                            alt="Instalasi plumbing lengkap KINA di Tangerang">
                        <div class="portfolio-overlay">
                            <h5>Renovasi Rumah Komplit</h5>
                            <p>Tangerang</p>
                            <small>Renovasi Rumah Full </small>
                        </div>
                        <h6 style="text-align: center">Renovasi Rumah Full-Tangerang </h6>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/portofolio-kina-renovasi-pemasangan-kolam-koi.png') }}"
                            alt="Instalasi plumbing lengkap KINA di Tangerang">
                        <div class="portfolio-overlay">
                            <h5>Pemasangan Kolam </h5>
                            <p>Jakarta</p>
                            <small>Renovasi Rumah Pemasangan Kolam Ikan</small>
                        </div>
                        <h6 style="text-align: center">Pemasangan Kolam Ikan</h6>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/portofolio-kina-renovasi-waterprof.png') }}"
                            alt="Instalasi plumbing lengkap KINA di Tangerang">
                        <div class="portfolio-overlay">
                            <h5>Pemasangan Atap waterproof</h5>
                            <p>Jakarta</p>
                            <small>Pemasangan Water Proof </small>
                        </div>
                        <h6 style="text-align: center">Pemasangan Waterproff </h6>
                    </article>
                </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <article class="portfolio-item">
                        <img src="{{ asset('assets/image/portofolio/renovasi-atap-portofolio-KINA-renovasi.png') }}"
                            alt="Instalasi plumbing lengkap KINA di Tangerang">
                        <div class="portfolio-overlay">
                            <h5>Pemasangan Atap Kanopi</h5>
                            <p>Jakarta</p>
                            <small>Perbaikan Atap Bocor </small>
                        </div>
                        <h6 style="text-align: center">Pemasangan dan Perbaikan Atap Bocor</h6>
                    </article>
                </div>
            </div>

            <div class="text-center mt-4">
                
                <div class="mt-3">
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20proyek%20renovasi%20seperti%20di%20portofolio%20KINA."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Jadwalkan Survei Proyek Anda
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection