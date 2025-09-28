<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO TAG -->
    @yield('seotag')
    <meta name="robots" content="index, follow">
    <meta name="author" content="KINA Renovasi">
    <meta name="geo.region" content="ID-JK">
    <meta name="geo.placename" content="Jakarta, Indonesia">
    <meta name="geo.position" content="-6.2088;106.8456">
    <meta name="ICBM" content="-6.2088, 106.8456">
  <!-- Twiter Facebook Tags -->
    @yield('socialtags')
    <!-- Structured Data - LocalBusiness -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "KINA Renovasi",
      "image": "https://jasaperbaikanrumah.id/images/kina-logo.png",
      "description": "Jasa renovasi dan perbaikan rumah profesional di Jabodetabek dengan pengalaman 15+ tahun",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Jakarta",
        "addressRegion": "DKI Jakarta",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.2088,
        "longitude": 106.8456
      },
      "url": "https://jasaperbaikanrumah.id",
      "telephone": "+6281318410406",
      "priceRange": "$$",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday", 
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": -6.2088,
          "longitude": 106.8456
        },
        "geoRadius": "50000"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Layanan Renovasi Rumah",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Perbaikan Atap",
              "description": "Perbaikan bocor atap, penggantian genteng, waterproofing"
            }
          },
          {
            "@type": "Offer", 
            "itemOffered": {
              "@type": "Service",
              "name": "Plumbing",
              "description": "Perbaikan pipa bocor, instalasi sanitair, sistem pembuangan"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service", 
              "name": "Elektrikal",
              "description": "Instalasi listrik, perbaikan konsleting, upgrade panel"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Renovasi",
              "description": "Renovasi ruangan, pengecatan, finishing premium"
            }
          }
        ]
      }
    }
    </script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
         <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>
<body>
    <a href="#main-content" class="skip-link">Langsung ke konten utama</a>
    
    <!-- Navigation -->
   @include('app.layouts.assets.header')

    <!-- Main Content -->
    <main id="main-content">
        @yield('main')
    </main>

    <!-- Footer -->
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
    <!-- CUSTOM JS -->
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}
    <script>
        
        // Simple JavaScript for basic functionality without complex loading
        document.addEventListener('DOMContentLoaded', function() {
            // Navbar scroll effect
            function handleNavbarScroll() {
                const navbar = document.getElementById('mainNavbar');
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
            
            // Smooth scrolling for anchor links
            function setupSmoothScrolling() {
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            }
            
            // FAQ Accordion
            function setupFAQ() {
                document.querySelectorAll('.faq-question').forEach(question => {
                    question.addEventListener('click', function() {
                        const faqItem = this.closest('.faq-item');
                        const isActive = faqItem.classList.contains('active');
                        
                        // Close all other FAQ items
                        document.querySelectorAll('.faq-item').forEach(item => {
                            if (item !== faqItem) {
                                item.classList.remove('active');
                                const btn = item.querySelector('.faq-question');
                                btn.setAttribute('aria-expanded', 'false');
                            }
                        });
                        
                        // Toggle current FAQ item
                        if (isActive) {
                            faqItem.classList.remove('active');
                            this.setAttribute('aria-expanded', 'false');
                        } else {
                            faqItem.classList.add('active');
                            this.setAttribute('aria-expanded', 'true');
                        }
                    });
                });
            }
            
            // Initialize all functionality
            handleNavbarScroll();
            setupSmoothScrolling();
            setupFAQ();
            
            // Add scroll event listener
            window.addEventListener('scroll', handleNavbarScroll);
            
            // Add structured data for better SEO
            const breadcrumbData = {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Beranda",
                        "item": "https://jasaperbaikanrumah.id/"
                    }
                ]
            };
            
            const script = document.createElement('script');
            script.type = 'application/ld+json';
            script.textContent = JSON.stringify(breadcrumbData);
            document.head.appendChild(script);
            
            console.log('KINA Renovasi website loaded successfully');
        });
        
        // Simple analytics placeholder (replace with actual analytics code)
        function trackEvent(category, action, label) {
            // Replace with actual analytics tracking
            console.log('Event tracked:', category, action, label);
        }
        
        // Track button clicks for conversion optimization
        document.addEventListener('click', function(e) {
            if (e.target.closest('.btn-survei')) {
                trackEvent('CTA', 'Click', 'Survei Button');
            }
            if (e.target.closest('.floating-chat')) {
                trackEvent('CTA', 'Click', 'Floating Chat');
            }
        });
   
    </script>
   
</body>
</html>