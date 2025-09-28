@extends('app.layouts.app')
@section('seotag')
    <!-- SEO Meta Tags -->
    <title>Kebijakan Privasi - KINA Renovasi | Perlindungan Data Pelanggan</title>
    <meta name="description"
        content="Kebijakan privasi KINA Renovasi menjelaskan bagaimana kami melindungi informasi pribadi Anda. Komitmen kami terhadap keamanan data pelanggan.">
    <meta name="keywords"
        content="kebijakan privasi kina renovasi, perlindungan data, privacy policy, keamanan informasi">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://jasaperbaikanrumah.id/privacy-policy">
@endsection

@section('socialtags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jasaperbaikanrumah.id/privacy-policy">
    <meta property="og:title" content="Kebijakan Privasi - KINA Renovasi">
    <meta property="og:description"
        content="Kebijakan privasi dan perlindungan data pelanggan KINA Renovasi">
    <meta property="og:image" content="https://jasaperbaikanrumah.id/image/kina-renovasi-logo.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://jasaperbaikanrumah.id/privacy-policy">
    <meta name="twitter:title" content="Kebijakan Privasi - KINA Renovasi">
    <meta name="twitter:description"
        content="Kebijakan privasi dan perlindungan data pelanggan KINA Renovasi">
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
                    Kebijakan Privasi
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Privacy Policy Section -->
<section id="privacy-policy-section" class="section-padding position-relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="about-bg-element-1"></div>
    <div class="about-bg-element-2"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-content">
                    <!-- Badge -->
                    <div class="badge-wrapper mb-4 text-center">
                        <span class="about-badge-kina">
                            <i class="fas fa-shield-alt me-2"></i>
                            Perlindungan Data Terjamin
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="display-5 fw-bold mb-4 about-title-gradient text-center">
                        Kebijakan Privasi KINA Renovasi
                    </h1>

                    <!-- Last Updated -->
                    <div class="text-center mb-5">
                        <p class="text-muted">
                            <i class="fas fa-calendar-alt me-2"></i>
                            Terakhir diperbarui: 1 Januari 2025
                        </p>
                    </div>

                    <!-- Introduction -->
                    <div class="about-keunggulan-card mb-5">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-info-circle me-3"></i>
                            <h5 class="mb-0">Pengantar</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">
                                KINA Renovasi berkomitmen untuk melindungi privasi dan keamanan informasi pribadi Anda. 
                                Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi Anda 
                                ketika menggunakan layanan renovasi rumah kami.
                            </p>
                        </div>
                    </div>

                    <!-- Information We Collect -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-database me-3"></i>
                            <h5 class="mb-0">Informasi yang Kami Kumpulkan</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-user"></i>
                                <span><strong>Informasi Kontak:</strong> Nama, nomor telepon, dan alamat email yang Anda berikan melalui WhatsApp</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span><strong>Informasi Lokasi:</strong> Alamat properti untuk keperluan survei dan pengerjaan proyek</span>
                            </li>
                            <li>
                                <i class="fas fa-comments"></i>
                                <span><strong>Komunikasi:</strong> Pesan dan diskusi terkait proyek renovasi melalui WhatsApp</span>
                            </li>
                            <li>
                                <i class="fas fa-camera"></i>
                                <span><strong>Foto Proyek:</strong> Gambar properti yang dibagikan untuk keperluan estimasi dan dokumentasi</span>
                            </li>
                        </ul>
                    </div>

                    <!-- How We Use Information -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-cogs me-3"></i>
                            <h5 class="mb-0">Penggunaan Informasi</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-clipboard-check"></i>
                                <span>Memberikan survei gratis dan estimasi harga yang akurat</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>Berkomunikasi dengan Anda mengenai proyek renovasi</span>
                            </li>
                            <li>
                                <i class="fas fa-tools"></i>
                                <span>Melaksanakan pekerjaan renovasi sesuai kesepakatan</span>
                            </li>
                            <li>
                                <i class="fas fa-headset"></i>
                                <span>Memberikan layanan purna jual dan garansi kerja</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Data Protection -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-lock me-3"></i>
                            <h5 class="mb-0">Perlindungan Data</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-3">Kami menerapkan langkah-langkah keamanan untuk melindungi informasi pribadi Anda:</p>
                            <ul class="about-keunggulan-list">
                                <li>
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Informasi hanya disimpan selama diperlukan untuk proyek</span>
                                </li>
                                <li>
                                    <i class="fas fa-users"></i>
                                    <span>Akses terbatas hanya untuk tim yang berwenang</span>
                                </li>
                                <li>
                                    <i class="fas fa-ban"></i>
                                    <span>Tidak membagikan informasi kepada pihak ketiga tanpa persetujuan</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- WhatsApp Communication -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fab fa-whatsapp me-3"></i>
                            <h5 class="mb-0">Komunikasi WhatsApp</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">
                                Sebagian besar komunikasi dilakukan melalui WhatsApp. Kami menghormati kebijakan privasi WhatsApp 
                                dan hanya menggunakan informasi yang Anda bagikan untuk keperluan layanan renovasi. 
                                Anda dapat menghubungi kami kapan saja untuk pertanyaan terkait data pribadi Anda.
                            </p>
                        </div>
                    </div>

                    <!-- Your Rights -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-user-check me-3"></i>
                            <h5 class="mb-0">Hak Anda</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-eye"></i>
                                <span>Mengetahui informasi apa saja yang kami simpan tentang Anda</span>
                            </li>
                            <li>
                                <i class="fas fa-edit"></i>
                                <span>Meminta koreksi informasi yang tidak akurat</span>
                            </li>
                            <li>
                                <i class="fas fa-trash"></i>
                                <span>Meminta penghapusan data pribadi setelah proyek selesai</span>
                            </li>
                            <li>
                                <i class="fas fa-stop"></i>
                                <span>Menolak penggunaan data untuk tujuan tertentu</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Information -->
                    <div class="about-keunggulan-card mb-5">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-envelope me-3"></i>
                            <h5 class="mb-0">Hubungi Kami</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-3">Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami:</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="about-stats-card">
                                        <div class="about-stats-icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <div class="about-stats-content">
                                            <h6 class="mb-1">WhatsApp</h6>
                                            <p class="about-stats-label mb-0">+62 813-1841-0406</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-stats-card">
                                        <div class="about-stats-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="about-stats-content">
                                            <h6 class="mb-1">Wilayah Layanan</h6>
                                            <p class="about-stats-label mb-0">Jabodetabek</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="about-cta-buttons text-center">
                        <a href="https://wa.me/6281318410406?text=Saya%20ingin%20bertanya%20tentang%20kebijakan%20privasi%20KINA%20Renovasi" 
                           class="about-btn-whatsapp" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fab fa-whatsapp me-2"></i>
                            Hubungi Kami untuk Pertanyaan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection