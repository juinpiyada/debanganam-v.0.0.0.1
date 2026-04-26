<?php 
  $current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- SEO Meta Tags -->
  <title><?php echo isset($pageTitle) ? $pageTitle : "Debanganam Old Age Home in Sonarpur, Kolkata | Best Elderly Care"; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : "Debanganam Old Age Home offers compassionate elderly care in Sonarpur, Kolkata. 24/7 nursing care, comfortable facilities, and a homely environment for seniors. Contact us today."; ?>">
  <meta name="keywords" content="Old Age Home in Sonarpur, Old Age Home in Kolkata, Elderly Care Kolkata, 24/7 Nursing Care Sonarpur, Senior Care Home, Retirement Home Kolkata">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Debanganam Old Age Home">
  
  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : "Debanganam Old Age Home - Elderly Care in Sonarpur, Kolkata"; ?>">
  <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : "Compassionate elderly care with 24/7 nursing support. A home away from home for your loved ones."; ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_IN">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="https://debanganam.com">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="img/logo.png">
  
  <!-- Structured Data (JSON-LD) for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Debanganam Old Age Home",
    "image": "https://debanganam.com/img/logo.png",
    "@id": "https://debanganam.com",
    "url": "https://debanganam.com",
    "telephone": "+917605869720",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Sonarpur",
      "addressLocality": "Kolkata",
      "addressRegion": "West Bengal",
      "postalCode": "700150",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 22.4437,
      "longitude": 88.4239
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
      ],
      "opens": "00:00",
      "closes": "23:59"
    },
    "sameAs": [
      "https://www.facebook.com/Debanganam",
      "https://www.youtube.com/@Debanganam",
      "https://share.google/9O9poR5oLcTUTunzi"
    ]
  }
  </script>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#A8D5BA',
            cta: '#E53935',
            dark: '#333333',
            'brand-green': '#A8D5BA',
            'brand-red': '#E53935',
            'brand-dark': '#333333',
          
          },
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          },
          animation: {
            'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
            'fade-in': 'fadeIn 1s ease-out forwards',
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' },
            }
          }
        }
      }
    }
  </script>
  
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
    
    /* Scroll animations */
    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
      .reveal {
        opacity: 1;
        transform: none;
        transition: none;
      }
    }
    
    /* Smooth scroll */
    html {
      scroll-behavior: smooth;
    }
    
    /* Initial state for animated elements so they don't flash before JS loads */
    .animate-on-load {
      opacity: 0;
    }
    
    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #A8D5BA;
      border-radius: 5px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #8bc4a3;
    }
    
    /* Hero background pattern */
    .hero-pattern {
      background-image: 
        radial-gradient(circle at 20% 80%, rgba(168, 213, 186, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(168, 213, 186, 0.2) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(168, 213, 186, 0.1) 0%, transparent 30%);
    }
    
    /* Floating animation */
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    
    .float-animation {
      animation: float 3s ease-in-out infinite;
    }
    
    /* Pulse animation for CTA */
    @keyframes pulse-ring {
      0% { transform: scale(1); opacity: 1; }
      100% { transform: scale(1.5); opacity: 0; }
    }
    
    .pulse-btn::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 9999px;
      background: rgba(37, 211, 102, 0.4);
      animation: pulse-ring 2s ease-out infinite;
    }
    
    /* Service card hover */
    .service-card:hover .service-icon {
      transform: scale(1.1) rotate(5deg);
    }
    
    /* Gallery image zoom */
    .gallery-item:hover img {
      transform: scale(1.05);
    }

    /* Hamburger Menu Animation */
    .hamburger-line {
      display: block;
      width: 24px;
      height: 2px;
      background-color: #333;
      margin: 5px auto;
      transition: all 0.3s ease-in-out;
    }

    #mobile-menu-btn.is-active .line-1 {
      transform: translateY(7px) rotate(45deg);
    }

    #mobile-menu-btn.is-active .line-2 {
      opacity: 0;
    }

    #mobile-menu-btn.is-active .line-3 {
      transform: translateY(-7px) rotate(-45deg);
    }

    /* Mobile Menu Slide Animation */
    #mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-in-out;
    }

    #mobile-menu.is-active {
      max-height: 100vh;
    }
  </style>
</head>
<body class="bg-white text-[#333333]">

  <!-- Header -->
  <header id="main-header" class="fixed top-0 left-0 right-0 z-50 bg-white transition-all duration-300 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16 md:h-20">
        
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2 flex-shrink-0">
          <img src="img/logo.png" alt="Debanganam Old Age Home Logo" class="w-10 h-10 md:w-12 md:h-12 object-contain">
          <div class="block">
            <span class="text-sm sm:text-lg md:text-xl font-bold text-[#333333] leading-tight block">Debanganam</span>
            <span class="text-[10px] sm:text-xs md:text-sm text-[#666666] leading-tight block uppercase tracking-tighter">Old Age Home</span>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-1">
          <a href="/" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Home</a>
          <a href="aboutus" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">About</a>
          <a href="services" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Services</a>
          <a href="facilities" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Facilities</a>
          <a href="gallery" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Gallery</a>
          <a href="admission" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Admission</a>
          <a href="contact" class="nav-link px-4 py-2 text-[#333333] font-medium rounded-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-200">Contact</a>
        </nav>

        <!-- CTA Buttons -->
        <div class="hidden md:flex items-center space-x-3">
          <?php if ($current_page != '404.php'): ?>
          <a href="https://wa.me/917605869720" target="_blank" rel="noopener" class="inline-flex items-center px-5 py-2.5 bg-[#25D366] text-white font-bold rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-200 pulse-btn relative">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            WhatsApp
          </a>
          <?php endif; ?>
          <a href="tel:+917605869720" class="inline-flex items-center px-5 py-2.5 bg-[#E53935] text-white font-bold rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-200">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            Call
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg focus:outline-none" aria-label="Toggle menu">
          <span class="hamburger-line line-1"></span>
          <span class="hamburger-line line-2"></span>
          <span class="hamburger-line line-3"></span>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden bg-white border-t border-gray-100 shadow-xl">
      <div class="px-4 py-6 space-y-2">
        <a href="/" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Home</a>
        <a href="aboutus" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">About</a>
        <a href="services" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Services</a>
        <a href="facilities" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Facilities</a>
        <a href="gallery" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Gallery</a>
        <a href="admission" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Admission</a>
        <a href="contact" class="block px-6 py-3 text-[#333333] font-semibold rounded-2xl hover:bg-[#A8D5BA] hover:text-white transition-all">Contact</a>
        
        <div class="pt-6 border-t border-gray-100 flex flex-col space-y-4">
          <?php if ($current_page != '404.php'): ?>
          <a href="https://wa.me/917605869720" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-6 py-4 bg-[#25D366] text-white font-bold rounded-2xl shadow-lg">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            WhatsApp Us
          </a>
          <?php endif; ?>
          <a href="tel:+917605869720" class="inline-flex items-center justify-center px-6 py-4 bg-[#E53935] text-white font-bold rounded-2xl shadow-lg">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            Call Us Now
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- SPACER -->
  <div class="h-16 md:h-20"></div>
