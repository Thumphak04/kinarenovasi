@extends('app.layouts.app')
@section('seotag')
    <!-- SEO Meta Tags -->
    <title>Syarat & Ketentuan - KINA Renovasi | Terms of Service</title>
    <meta name="description"
        content="Syarat dan ketentuan layanan KINA Renovasi. Ketentuan penggunaan jasa renovasi rumah, survei gratis, dan garansi kerja di Jabodetabek.">
    <meta name="keywords"
        content="syarat ketentuan kina renovasi, terms conditions, ketentuan layanan, aturan renovasi rumah">
    <!-- Canonical URL -->
    <link rel="canonical" href="https://jasaperbaikanrumah.id/terms-conditions">
@endsection

@section('socialtags')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jasaperbaikanrumah.id/terms-conditions">
    <meta property="og:title" content="Syarat & Ketentuan - KINA Renovasi">
    <meta property="og:description"
        content="Syarat dan ketentuan penggunaan layanan renovasi rumah KINA Renovasi">
    <meta property="og:image" content="https://jasaperbaikanrumah.id/image/kina-renovasi-logo.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://jasaperbaikanrumah.id/terms-conditions">
    <meta name="twitter:title" content="Syarat & Ketentuan - KINA Renovasi">
    <meta name="twitter:description"
        content="Syarat dan ketentuan penggunaan layanan renovasi rumah KINA Renovasi">
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
                    Syarat & Ketentuan
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Terms & Conditions Section -->
<section id="terms-conditions-section" class="section-padding position-relative overflow-hidden">
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
                            <i class="fas fa-handshake me-2"></i>
                            Komitmen Bersama
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="display-5 fw-bold mb-4 about-title-gradient text-center">
                        Syarat & Ketentuan KINA Renovasi
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
                                Selamat datang di KINA Renovasi. Dengan menggunakan layanan kami, Anda menyetujui syarat dan ketentuan berikut. 
                                Silakan membaca dengan seksama sebelum menggunakan layanan renovasi rumah kami.
                            </p>
                        </div>
                    </div>

                    <!-- Service Agreement -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-clipboard-check me-3"></i>
                            <h5 class="mb-0">Layanan yang Disediakan</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-search"></i>
                                <span><strong>Survei Gratis:</strong> Inspeksi dan analisis kondisi properti tanpa biaya</span>
                            </li>
                            <li>
                                <i class="fas fa-calculator"></i>
                                <span><strong>Estimasi Transparan:</strong> Rincian biaya material dan jasa yang jelas</span>
                            </li>
                            <li>
                                <i class="fas fa-tools"></i>
                                <span><strong>Jasa Renovasi:</strong> Pekerjaan perbaikan dan renovasi rumah profesional</span>
                            </li>
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span><strong>Garansi Kerja:</strong> Jaminan kualitas untuk pekerjaan yang telah diselesaikan</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Booking Process -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fab fa-whatsapp me-3"></i>
                            <h5 class="mb-0">Proses Pemesanan</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>Kontak awal dilakukan melalui WhatsApp di nomor +62 813-1841-0406</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Penjadwalan survei gratis berdasarkan ketersediaan tim</span>
                            </li>
                            <li>
                                <i class="fas fa-file-contract"></i>
                                <span>Persetujuan estimasi harga sebelum memulai pekerjaan</span>
                            </li>
                            <li>
                                <i class="fas fa-play"></i>
                                <span>Pelaksanaan pekerjaan sesuai jadwal yang disepakati</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Payment Terms -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-credit-card me-3"></i>
                            <h5 class="mb-0">Ketentuan Pembayaran</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-money-bill"></i>
                                <span>Sistem pembayaran akan dijelaskan saat konsultasi awal</span>
                            </li>
                            <li>
                                <i class="fas fa-receipt"></i>
                                <span>Bukti pembayaran dan kwitansi akan diberikan untuk setiap transaksi</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Pembayaran sesuai dengan kesepakatan dan tahapan pekerjaan</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Warranty Terms -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-certificate me-3"></i>
                            <h5 class="mb-0">Ketentuan Garansi</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-shield-alt"></i>
                                <span>Garansi kerja diberikan sesuai dengan jenis pekerjaan yang dilakukan</span>
                            </li>
                            <li>
                                <i class="fas fa-wrench"></i>
                                <span>Perbaikan gratis untuk kerusakan yang disebabkan oleh kesalahan teknis</span>
                            </li>
                            <li>
                                <i class="fas fa-exclamation-triangle"></i>
                                <span>Garansi tidak berlaku untuk kerusakan akibat bencana alam atau penyalahgunaan</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Client Responsibilities -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-user-check me-3"></i>
                            <h5 class="mb-0">Tanggung Jawab Klien</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-info"></i>
                                <span>Memberikan informasi yang akurat tentang kondisi properti</span>
                            </li>
                            <li>
                                <i class="fas fa-key"></i>
                                <span>Memastikan akses yang aman ke lokasi proyek</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Menginformasikan perubahan jadwal minimal 24 jam sebelumnya</span>
                            </li>
                            <li>
                                <i class="fas fa-handshake"></i>
                                <span>Mematuhi kesepakatan yang telah dibuat bersama</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Service Area -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-map me-3"></i>
                            <h5 class="mb-0">Wilayah Layanan</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-3">Layanan KINA Renovasi tersedia di seluruh wilayah Jabodetabek:</p>
                            <div class="row g-2">
                                <div class="col-md-2 col-4">
                                    <div class="about-stats-card text-center py-2">
                                        <div class="about-stats-content">
                                            <p class="about-stats-label mb-0"><small>DKI Jakarta</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="about-stats-card text-center py-2">
                                        <div class="about-stats-content">
                                            <p class="about-stats-label mb-0"><small>Bogor</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="about-stats-card text-center py-2">
                                        <div class="about-stats-content">
                                            <p class="about-stats-label mb-0"><small>Depok</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="about-stats-card text-center py-2">
                                        <div class="about-stats-content">
                                            <p class="about-stats-label mb-0"><small>Tangerang</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <div class="about-stats-card text-center py-2">
                                        <div class="about-stats-content">
                                            <p class="about-stats-label mb-0"><small>Bekasi</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Limitations -->
                    <div class="about-keunggulan-card mb-4">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-exclamation-circle me-3"></i>
                            <h5 class="mb-0">Batasan Layanan</h5>
                        </div>
                        <ul class="about-keunggulan-list">
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Jadwal pengerjaan dapat berubah karena kondisi cuaca atau keadaan darurat</span>
                            </li>
                            <li>
                                <i class="fas fa-ban"></i>
                                <span>KINA Renovasi berhak menolak proyek yang tidak sesuai dengan keahlian tim</span>
                            </li>
                            <li>
                                <i class="fas fa-tools"></i>
                                <span>Perubahan spesifikasi di tengah proyek dapat mempengaruhi biaya dan waktu</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="about-keunggulan-card mb-5">
                        <div class="about-keunggulan-header">
                            <i class="fas fa-edit me-3"></i>
                            <h5 class="mb-0">Perubahan Syarat & Ketentuan</h5>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">
                                KINA Renovasi berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan diinformasikan 
                                melalui website dan komunikasi langsung dengan klien yang sedang menjalankan proyek.
                            </p>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="about-cta-buttons text-center">
                        <a href="https://wa.me/6281318410406?text=Saya%20setuju%20dengan%20syarat%20dan%20ketentuan%20KINA%20Renovasi%20dan%20ingin%20konsultasi%20proyek%20renovasi" 
                           class="about-btn-whatsapp" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fab fa-whatsapp me-2"></i>
                            Setuju & Mulai Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection