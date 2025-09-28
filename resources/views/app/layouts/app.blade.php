<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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