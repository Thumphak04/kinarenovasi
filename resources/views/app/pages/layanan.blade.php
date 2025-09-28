@extends('app.layouts.app')
@section('seotag')
    <title>KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek | Survei Gratis & Garansi</title>
    <meta name="description"
        content="KINA Renovasi menyediakan jasa perbaikan rumah profesional di Jabodetabek. Survei gratis, estimasi transparan, garansi kerja. Spesialisasi renovasi, atap, plumbing, elektrikal dengan 15+ tahun pengalaman.">
    <meta name="keywords"
        content="jasa renovasi rumah jakarta, perbaikan rumah jabodetabek, tukang bangunan jakarta, renovasi rumah bekasi, perbaikan atap jakarta, KINA renovasi, jasa plumbing jakarta, kontraktor rumah">
    <link rel="canonical" href="https://jasaperbaikanrumah.id/">
@endsection
@section('socialtags')
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jasaperbaikanrumah.id/">
    <meta property="og:title" content="KINA Renovasi - Jasa Perbaikan Rumah Jabodetabek Terpercaya">
    <meta property="og:description"
        content="Jasa renovasi dan perbaikan rumah profesional di Jabodetabek. Survei gratis, estimasi transparan, garansi kerja. Hubungi sekarang!">
    <meta property="og:image" content="https://jasaperbaikanrumah.id/images/kina-renovasi-og.jpg">
    <meta property="og:site_name" content="KINA Renovasi">
    <meta property="og:locale" content="id_ID">
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
                    Layanan
                </li>
            </ol>
        </nav>
    </div>
</section>
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
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </div>
                    <h3>Perbaikan Atap</h3>
                    <p>Spesialis perbaikan bocor atap, penggantian genteng keramik/metal, waterproofing, dan sistem talang.
                        Material berkualitas dengan garansi hingga 5 tahun.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20perbaikan%20atap%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei perbaikan atap">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Perbaikan Atap
                    </a>
                </article>

                <article class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench" aria-hidden="true"></i>
                    </div>
                    <h3>Plumbing & Sanitair</h3>
                    <p>Instalasi dan perbaikan sistem air bersih, pembuangan, pipa bocor, toilet, shower, water heater.
                        Menggunakan material PVC dan PPR berkualitas.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20perbaikan%20plumbing%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei plumbing">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Plumbing
                    </a>
                </article>

                <article class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt" aria-hidden="true"></i>
                    </div>
                    <h3>Elektrikal & Listrik</h3>
                    <p>Instalasi listrik rumah, upgrade panel, perbaikan konsleting, pemasangan saklar & stop kontak.
                        Dikerjakan teknisi bersertifikat sesuai standar SNI.</p>
                    <div class="price-note">
                        <i class="fas fa-clipboard-check me-1" aria-hidden="true"></i>Harga setelah survei gratis
                    </div>
                    <a href="https://wa.me/6281318410406?text=Saya%20ingin%20jadwalkan%20survei%20untuk%20perbaikan%20elektrikal%20dengan%20KINA%20Renovasi."
                        class="btn btn-survei" target="_blank" rel="noopener noreferrer"
                        aria-label="Hubungi untuk survei elektrikal">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>Survei Elektrikal
                    </a>
                </article>

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
                <a href="{{ route('index') }}#kontak" class="btn btn-cta btn-lg" aria-label="Jadwalkan survei gratis sekarang">
                    <i class="fab fa-whatsapp me-2" aria-hidden="true"></i>Jadwalkan Survei Gratis
                </a>
            </div>
        </div>
    </section>

@endsection