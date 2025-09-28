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
    <!-- Hero Section -->
    <section class="hero" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <div class="service-area-badge mt-3">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span>Melayani Jabodetabek</span>

                        </div>

                        <h1>Jasa Renovasi Rumah <span style="color: var(--accent-color);">KINA</span> dengan Survei Gratis &
                            Estimasi Akurat
                            <a href="#layanan" class="btn btn-outline-light btn-lg"
                                aria-label="Lihat layanan renovasi kami">
                                <i class="fas fa-tools me-2" aria-hidden="true"></i>Lihat Layanan
                            </a>
                        </h1>
                        <p class="lead">Spesialis renovasi rumah di Jabodetabek dengan pengalaman 15+ tahun. Dapatkan
                            survei profesional gratis, estimasi harga transparan, dan garansi kerja. Tim ahli kami melayani
                            perbaikan atap, plumbing, elektrikal, dan renovasi total.

                        </p>
                        <div class="trust-indicators">
                            <div class="trust-item">
                                <span class="number">15+</span>
                                <span>Tahun Pengalaman</span>
                            </div>
                            <div class="trust-item">
                                <span class="number">1000+</span>
                                <span>Rumah Direnovasi</span>
                            </div>
                            <div class="trust-item">
                                <span class="number">100%</span>
                                <span>Garansi Kerja</span>
                            </div>
                            <div class="trust-item">
                               <img src="{{ asset('assets/image/kina-renovasi-logo.jpg') }}" alt="KINA Renovasi Logo" height="70" class="d-inline-block align-text-top">
                            </div>
                        </div>

                        <div class="survei-highlight">
                            <h3><i class="fas fa-clipboard-check me-2" aria-hidden="true"></i>Mengapa Pilih Survei Gratis
                                KINA?</h3>
                            <p class="mb-0">Setiap rumah di Jabodetabek memiliki kondisi unik. Dengan survei gratis dari
                                tim bersertifikat kami, Anda mendapat estimasi harga yang akurat dan tidak ada biaya
                                tersembunyi. Sudah dipercaya ribuan keluarga di Jakarta, Bogor, Depok, Tangerang, dan
                                Bekasi.</p>
                        </div>

                        <div class="d-flex flex-wrap gap-3 mb-2">
                            <a href="https://wa.me/6281318410406?text=Halo%20KINA%20Renovasi%2C%20saya%20ingin%20menjadwalkan%20survei%20perbaikan%20rumah%20sekarang."
                                class="btn btn-survei btn-survei-lg" target="_blank" rel="noopener noreferrer"
                                aria-label="Jadwalkan survei gratis via WhatsApp">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>Jadwalkan Survei Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="section-padding" style="background: var(--bg-secondary);">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Renovasi Rumah KINA</h2>
                <p>Semua layanan dimulai dengan survei gratis untuk memberikan estimasi yang akurat sesuai kondisi rumah di
                    Jabodetabek</p>
            </div>

            <div class="services-grid">
                <article class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-building" aria-hidden="true"></i>
                    </div>
                    <h3>Renovasi Total</h3>
                    <p>Layanan renovasi skala besar, mulai dari perubahan layout, penambahan lantai, hingga membangun ulang
                        struktur. Perencanaan matang untuk hasil maksimal.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20renovasi%20total%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei renovasi total">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Renovasi Total
                    </a>
                </article>
                
                <article class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-roller" aria-hidden="true"></i>
                    </div>
                    <h3>Cat & Finishing</h3>
                    <p>Pengecatan interior dan eksterior, pemasangan keramik, plafon gypsum, dan partisi. Memberikan sentuhan
                        akhir yang premium dengan detail sempurna.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20pengecatan%20&%20finishing%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei cat dan finishing">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Pengecatan
                    </a>
                </article>

                <article class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h3>Home Maintenance</h3>
                    <p>Layanan perawatan rumah berkala untuk memastikan semua sistem berfungsi optimal, dari pengecekan atap
                        hingga inspeksi sistem kelistrikan dan plumbing.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20home%20maintenance%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei home maintenance">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Maintenance
                    </a>
                </article>
            </div>

            <div class="text-center mt-5">
                <a href="{{route('layanan')}}" class="btn btn-cta btn-lg" aria-label="Lihat semua layanan KINA Renovasi">
                    <i class="fas fa-tools me-2" aria-hidden="true"></i>Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
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
            <!-- CTA Buttons -->
                    <div class="about-cta-buttons">
                        <a href="https://wa.me/6281318410406?text=Saya%20ingin%20konsultasi%20dan%20jadwalkan%20survei%20untuk%20perbaikan%20rumah%20dengan%20KINA%20Renovasi." 
                           class="about-btn-whatsapp" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fab fa-whatsapp me-2"></i>
                            Konsultasi & Survei Gratis
                        </a>
                        <a href="{{route('tentang')}}" class="about-btn-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Baca Selengkapnya Tentang KINA
                        </a>
                    </div>
        </div>
    </div>
</section>



    <!-- Process Section -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Proses Kerja KINA Renovasi</h2>
                <p>Sistem kerja yang transparan dan terstruktur untuk memastikan kepuasan maksimal setiap pelanggan</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step step-survei">
                        <div class="process-number">1</div>
                        <h5>Survei & Konsultasi Gratis</h5>
                        <p>Tim tukang surveyor profesional datang ke lokasi untuk inspeksi mendetail, analisis struktural, dan
                            konsultasi solusi terbaik sesuai budget Anda.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h5>Negosiasi Durasi & Harga</h5>
                        <p>Berdasarkan hasil survei, kami susun Rencana Anggaran Biaya (RAB) yang detail, transparan, dan
                            sesuai standar konstruksi. Dan dilakukan porses negosiasi dengan customer.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h5>Eksekusi Professional</h5>
                        <p>Pekerjaan dimulai sesuai jadwal dengan material berkualitas SNI, pengawasan ketat, dan laporan
                            progress harian.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="process-step">
                        <div class="process-number">4</div>
                        <h5>Garansi & After Service</h5>
                        <p>Serah terima proyek dengan dengan perbaikan yang sudha diselesaikan, panduan perawatan, dan layanan purna jual
                            responsif.</p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="survei-emphasis d-inline-block">
                    <h5 class="mb-3">Mulai Renovasi Impian Anda Sekarang!</h5>
                    <p class="mb-4">Tim KINA Renovasi siap membantu mewujudkan rumah impian Anda di seluruh Jabodetabek
                    </p>
                    <a href="https://wa.me/6281318410406?text=Halo%20KINA%20Renovasi%2C%20saya%20ingin%20menjadwalkan%20survei%20gratis%20untuk%20renovasi%20rumah."
                        class="btn btn-survei btn-survei-lg me-3" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>WhatsApp Sekarang
                    </a>
                    
                </div>
            </div>
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
            </div>

            <div class="text-center mt-4">
                <a href="{{route('portofolio')}}" class="btn btn-cta btn-lg"
                    aria-label="Lihat semua portofolio proyek KINA Renovasi">
                    <i class="fas fa-images me-2" aria-hidden="true"></i>Lihat Semua Portofolio
                </a>
                <div class="mt-3">
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20proyek%20renovasi%20seperti%20di%20portofolio%20KINA."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Jadwalkan Survei Proyek Anda
                    </a>
                </div>
            </div>
        </div>
    </section>

<section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Temukan jawaban untuk pertanyaan umum seputar biaya, proses, dan layanan renovasi rumah terpercaya dari KINA di Jabodetabek.</p>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Berapa perkiraan biaya renovasi rumah per meter di Jabodetabek?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Biaya renovasi sangat bervariasi tergantung jenis pekerjaan dan material. Namun, sebagai gambaran umum, biaya renovasi ringan berkisar Rp 2.5jt - Rp 4jt per m², sedangkan renovasi total (bangun dari nol) bisa mencapai Rp 4jt - Rp 6jt per m². Untuk estimasi akurat sesuai kebutuhan Anda, kami menyediakan survei dan pembuatan RAB (Rencana Anggaran Biaya) secara GRATIS.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Area mana saja yang di-cover layanan KINA Renovasi?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Kami melayani seluruh wilayah Jabodetabek, meliputi Jakarta (Selatan, Timur, Barat, Pusat, Utara), Bogor, Depok, Tangerang (termasuk Tangsel), dan Bekasi. Tim kami siap datang ke lokasi Anda untuk melakukan survei gratis di seluruh area tersebut.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Layanan perbaikan apa saja yang paling sering ditangani?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Kami adalah spesialis untuk berbagai jenis perbaikan dan renovasi, termasuk: perbaikan atap bocor, waterproofing dak beton, renovasi kamar mandi dan dapur, pengecatan ulang, penambahan ruangan atau lantai, pemasangan kanopi, hingga perbaikan masalah dinding rembes dan instalasi listrik/plumbing.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Apakah ada garansi untuk hasil pekerjaan renovasi?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Tentu. Kami memberikan garansi resmi yang tertuang dalam kontrak untuk menjamin kualitas pekerjaan. Garansi mencakup garansi konstruksi, garansi bebas bocor (untuk waterproofing dan atap), serta garansi instalasi. Kepuasan dan ketenangan Anda adalah prioritas kami.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>Bagaimana proses kerja dan sistem pembayaran di KINA Renovasi?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Proses kami transparan: 1) Survei & Konsultasi Gratis, 2) Penawaran & RAB Detail, 3) Penandatanganan Kontrak Kerja, 4) Pengerjaan Proyek, 5) Serah Terima. Sistem pembayaran dilakukan secara bertahap (termin) sesuai progres pekerjaan yang disepakati dalam kontrak, sehingga aman dan adil bagi kedua belah pihak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding" id="testimoni" style="background: var(--bg-secondary);">
        <div class="container">
            <div class="section-title">
                <h2>Testimoni Pelanggan KINA</h2>
                <p>Kepercayaan ribuan keluarga di Jabodetabek adalah komitmen kami untuk memberikan layanan terbaik</p>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <article class="testimonial-card">
                        <div class="testimonial-rating mb-2">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                        </div>
                        <p>"Survei KINA sangat detail dan profesional. Tim surveyor menjelaskan setiap masalah dengan jelas.
                            Estimasi harga tepat, tidak ada tambahan biaya. Atap rumah kami di Kemang sekarang tidak bocor
                            lagi, hasil kerjanya rapi dan tahan lama."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Budi Santoso</h6>
                                <small class="text-muted">Kemang, Jakarta Selatan</small>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-4">
                    <article class="testimonial-card">
                        <div class="testimonial-rating mb-2">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                        </div>
                        <p>"Tim KINA Renovasi sangat profesional dalam melakukan survei. Mereka memberikan solusi terbaik
                            untuk renovasi dapur dengan budget yang sesuai. Hasilnya melebihi ekspektasi kami, modern dan
                            fungsional!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Sari Dewi</h6>
                                <small class="text-muted">Harapan Indah, Bekasi</small>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-4">
                    <article class="testimonial-card">
                        <div class="testimonial-rating mb-2">
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star" aria-hidden="true"></i>
                        </div>
                        <p>"Survei gratis KINA membantu kami merencanakan budget renovasi dengan tepat. Tim kerja disiplin,
                            material berkualitas, dan hasilnya sesuai kontrak. Garansi kerja membuat kami tenang. Highly
                            recommended!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h6 class="mb-0">Ahmad Rizki</h6>
                                <small class="text-muted">BSD, Tangerang Selatan</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="/testimoni" class="btn btn-cta" aria-label="Lihat semua testimoni pelanggan KINA Renovasi">
                    <i class="fas fa-comments me-2" aria-hidden="true"></i>Lihat Semua Testimoni
                </a>
            </div>
        </div>
    </section>
@endsection
