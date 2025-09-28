
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
   