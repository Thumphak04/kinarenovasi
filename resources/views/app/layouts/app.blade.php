<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="KINA Renovasi">
    <meta name="geo.region" content="ID-JK">
    <meta name="geo.placename" content="Jakarta, Indonesia">
    <meta name="geo.position" content="-6.2088;106.8456">
    <meta name="ICBM" content="-6.2088, 106.8456">
        <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="MyWebSite">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    @yield('seotag')
    @yield('socialtags')
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('custom_css')
</head>
<body>
  <a href="#main-content" class="skip-link">Langsung ke konten utama</a>
    <!-- Simple Header -->
    @include('app.layouts.assets.header')

    <!-- Main Content -->
    <main id="main-content">
        @yield('main')
    </main>

    <!-- Simple Footer -->
  @include('app.layouts.assets.footer')

    <!-- Floating Chat Button -->
    <a href="https://wa.me/6281318410406?text=Halo%20KINA%20Renovasi%2C%20saya%20ingin%20tanya%20tentang%20jasa%20renovasi%20rumah." 
       class="floating-chat" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Chat dengan KINA Renovasi via WhatsApp">
        <i class="fas fa-comments me-2" aria-hidden="true"></i>Chat KINA Sekarang
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>