<?php include 'header.php'; ?>

  <!-- Main Content -->
  <main>
    <!-- Hero Section -->
    <section class="min-h-screen hero-pattern relative overflow-hidden">
      <!-- Decorative Elements -->
      <div class="absolute top-20 left-10 w-64 h-64 bg-[#A8D5BA]/20 rounded-full blur-3xl"></div>
      <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#A8D5BA]/10 rounded-full blur-3xl"></div>
      
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 md:pt-36 pb-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          
          <!-- Hero Content -->
          <div class="reveal text-center lg:text-left">
            <div class="inline-flex items-center px-4 py-2 bg-[#A8D5BA]/20 rounded-full mb-6">
              <span class="w-2 h-2 bg-[#A8D5BA] rounded-full mr-2"></span>
              <span class="text-sm font-medium text-[#333333]">Trusted Elderly Care Since 2019</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
              A Home Away From <span class="text-[#A8D5BA]">Home</span> For Your Loved Ones
            </h1>
            
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0">
              Compassionate elderly care in Sonarpur, Kolkata. We provide 24/7 nursing support, comfortable living spaces, and a nurturing community for seniors.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
              <a href="#admission" class="relative inline-flex items-center justify-center px-8 py-4 bg-[#E53935] text-white font-semibold rounded-full shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 pulse-btn">
                <span class="relative z-10">Enquire for Admission</span>
                <svg class="w-5 h-5 ml-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
              </a>
              <a href="tel:+917605869720" class="inline-flex items-center justify-center px-8 py-4 bg-white border-2 border-[#A8D5BA] text-[#333333] font-semibold rounded-full shadow-lg hover:bg-[#A8D5BA] hover:text-white transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call Us Now
              </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-12 flex flex-wrap items-center justify-center lg:justify-start gap-8">
              <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-[#333333]">7+</span>
                <span class="text-sm text-gray-500">Years of Service</span>
              </div>
              <div class="w-px h-12 bg-gray-200 hidden sm:block"></div>
              <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-[#333333]">500+</span>
                <span class="text-sm text-gray-500">Families Served</span>
              </div>
              <div class="w-px h-12 bg-gray-200 hidden sm:block"></div>
              <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-[#333333]">24/7</span>
                <span class="text-sm text-gray-500">Nursing Care</span>
              </div>
            </div>
          </div>
          
          <!-- Hero Image -->
          <div class="reveal relative">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl">
              <img 
                src="img/img-1.jpeg" 
                alt="Elderly residents enjoying comfortable living at Debanganam Old Age Home in Sonarpur, Kolkata" 
                class="w-full h-[400px] md:h-[500px] object-cover"
                loading="eager"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>
            
            <!-- Floating Card -->
            <div class="absolute -bottom-6 -left-6 md:-left-12 bg-white rounded-2xl shadow-xl p-4 md:p-6 float-animation">
              <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-[#A8D5BA] rounded-full flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                  </svg>
                </div>
                <div>
                  <span class="block font-semibold text-[#333333]">Caring Staff</span>
                  <span class="text-sm text-gray-500">Trained Caregivers</span>
                </div>
              </div>
            </div>
            
            <!-- Stats Card -->
            <div class="absolute -top-4 -right-4 md:-right-8 bg-[#A8D5BA] rounded-2xl shadow-xl p-4 md:p-5">
              <div class="text-center text-white">
                <span class="block text-2xl md:text-3xl font-bold">100%</span>
                <span class="text-sm opacity-90">Satisfaction</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 md:py-28 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          
          <!-- About Image -->
          <div class="reveal order-2 lg:order-1 relative">
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-4">
                <img 
                  src="img/img-3.jpeg" 
                  alt="Comfortable room at old age home in Kolkata" 
                  class="rounded-2xl shadow-lg w-full h-40 object-cover"
                  loading="lazy"
                >
                <img 
                  src="img/img-4.jpeg" 
                  alt="Garden area at elderly care facility Sonarpur" 
                  class="rounded-2xl shadow-lg w-full h-56 object-cover"
                  loading="lazy"
                >
              </div>
              <div class="pt-8 space-y-4">
                <img 
                  src="img/img-5.jpeg" 
                  alt="Medical care services at Debanganam nursing home" 
                  class="rounded-2xl shadow-lg w-full h-56 object-cover"
                  loading="lazy"
                >
                <img 
                  src="img/img-6.jpeg" 
                  alt="Professional caregivers at old age home Kolkata" 
                  class="rounded-2xl shadow-lg w-full h-40 object-cover"
                  loading="lazy"
                >
              </div>
            </div>
            
            <!-- Experience Badge -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-2xl shadow-2xl p-6 text-center">
              <span class="block text-4xl font-bold text-[#A8D5BA]">7+</span>
              <span class="text-sm text-gray-600 font-medium">Years Experience</span>
            </div>
          </div>
          
          <!-- About Content -->
          <div class="reveal order-1 lg:order-2">
            <span class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-medium mb-4">About Us</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
              Providing Compassionate <span class="text-[#A8D5BA]">Elderly Care</span> Since 2019
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6">
              Debanganam Old Age Home is a trusted name in elderly care in Sonarpur, Kolkata. We understand that choosing a care home for your loved ones is a significant decision, and we strive to make it the right one.
            </p>
            <p class="text-gray-600 leading-relaxed mb-8">
              Our facility offers a warm, homely environment where seniors can live with dignity, comfort, and companionship. With 24/7 nursing care, nutritious meals, recreational activities, and personalized attention, we ensure every resident feels at home.
            </p>
            
            <!-- Features List -->
            <div class="grid sm:grid-cols-2 gap-4 mb-8">
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-[#333333] font-medium">24/7 Nursing Support</span>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-[#333333] font-medium">Homely Environment</span>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-[#333333] font-medium">Nutritious Meals</span>
              </div>
              <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-[#333333] font-medium">Regular Health Checkups</span>
              </div>
            </div>
            
            <a href="#contact" class="inline-flex items-center text-[#E53935] font-semibold hover:text-[#c62828] transition-colors">
              Learn More About Us
              <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 md:py-28">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
          <span class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-medium mb-4">Our Services</span>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Comprehensive <span class="text-[#A8D5BA]">Elderly Care Services</span>
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            We offer a complete range of services designed to ensure the physical, emotional, and social well-being of our residents.
          </p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Service Card 1 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">24/7 Nursing Care</h3>
            <p class="text-gray-600 leading-relaxed">
              Round-the-clock medical support from trained nurses ensuring immediate attention to all health needs of residents.
            </p>
          </div>
          
          <!-- Service Card 2 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">Comfortable Accommodation</h3>
            <p class="text-gray-600 leading-relaxed">
              Clean, well-ventilated rooms with attached bathrooms, comfortable bedding, and personalized living spaces.
            </p>
          </div>
          
          <!-- Service Card 3 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">Nutritious Meals</h3>
            <p class="text-gray-600 leading-relaxed">
              Hygienically prepared, balanced meals catering to dietary requirements and health conditions of residents.
            </p>
          </div>
          
          <!-- Service Card 4 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">Recreational Activities</h3>
            <p class="text-gray-600 leading-relaxed">
              Daily activities including yoga, music, games, and social gatherings to keep residents engaged and happy.
            </p>
          </div>
          
          <!-- Service Card 5 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">Medical Assistance</h3>
            <p class="text-gray-600 leading-relaxed">
              Regular health checkups, medication management, and coordination with hospitals for specialized care.
            </p>
          </div>
          
          <!-- Service Card 6 -->
          <div class="reveal service-card bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
            <div class="service-icon w-16 h-16 bg-[#A8D5BA]/20 rounded-2xl flex items-center justify-center mb-6 transition-transform duration-300">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-[#A8D5BA] transition-colors">Personal Care</h3>
            <p class="text-gray-600 leading-relaxed">
              Assistance with daily activities like bathing, grooming, and mobility support with dignity and respect.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-20 md:py-28 bg-[#A8D5BA]/10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
          <span class="inline-block px-4 py-2 bg-[#A8D5BA]/30 text-[#333333] rounded-full text-sm font-medium mb-4">Our Facilities</span>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Modern Facilities for <span class="text-[#A8D5BA]">Comfortable Living</span>
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Our facility is designed to provide a safe, comfortable, and homely environment for all our residents.
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">WiFi Connectivity</h3>
            <p class="text-gray-600 text-sm">Stay connected with family through video calls</p>
          </div>
          

          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Garden Area</h3>
            <p class="text-gray-600 text-sm">Peaceful outdoor space for relaxation</p>
          </div>
          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Prayer Room</h3>
            <p class="text-gray-600 text-sm">Spiritual space for all religions</p>
          </div>
          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Affordable Pricing</h3>
            <p class="text-gray-600 text-sm">Quality care at reasonable costs</p>
          </div>
          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Power Backup</h3>
            <p class="text-gray-600 text-sm">Uninterrupted electricity supply</p>
          </div>
          

          
          <!-- Facility Item -->
          <div class="reveal bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center">
            <div class="w-14 h-14 bg-[#A8D5BA] rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
              </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Easy Visit Access</h3>
            <p class="text-gray-600 text-sm">Flexible visiting hours for families</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 md:py-28">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
          <span class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-medium mb-4">Photo Gallery</span>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            A Glimpse of <span class="text-[#A8D5BA]">Life at Debanganam</span>
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Take a look at our facilities and the happy moments of our residents.
          </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
          
          <div class="reveal gallery-item col-span-2 row-span-2 rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-7.jpeg" 
              alt="Residents enjoying activities at Debanganam Old Age Home Sonarpur" 
              class="w-full h-full object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-8.jpeg" 
              alt="Comfortable living room at elderly care facility Kolkata" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-9.jpeg" 
              alt="Medical care room at nursing home Sonarpur" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-10.jpeg" 
              alt="Professional nursing staff at Debanganam Kolkata" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-3.jpeg" 
              alt="Beautiful garden at old age home Sonarpur Kolkata" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item col-span-2 rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-4.jpeg" 
              alt="Activities area at Debanganam elderly care Sonarpur" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
          
          <div class="reveal gallery-item col-span-2 rounded-2xl overflow-hidden shadow-lg cursor-pointer">
            <img 
              src="img/img-5.jpeg" 
              alt="Dining area at Debanganam elderly care Sonarpur" 
              class="w-full h-48 object-cover transition-transform duration-500"
              loading="lazy"
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 md:py-28 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
          <span class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-medium mb-4">Testimonials</span>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            What Families <span class="text-[#A8D5BA]">Say About Us</span>
          </h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          
          <!-- Testimonial 1 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg relative">
            <div class="absolute -top-4 left-8">
              <div class="w-10 h-10 bg-[#A8D5BA] rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
              </div>
            </div>
            <p class="text-gray-600 leading-relaxed mb-6 pt-4">
              "Our father has been staying at Debanganam for 2 years now. The care and attention he receives is exceptional. The staff treats him like family. We are grateful for their dedication."
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center">
                <span class="text-[#A8D5BA] font-bold text-lg">RD</span>
              </div>
              <div class="ml-4">
                <h4 class="font-bold text-[#333333]">Rajesh Das</h4>
                <p class="text-sm text-gray-500">Sonarpur, Kolkata</p>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 2 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg relative">
            <div class="absolute -top-4 left-8">
              <div class="w-10 h-10 bg-[#A8D5BA] rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
              </div>
            </div>
            <p class="text-gray-600 leading-relaxed mb-6 pt-4">
              "The 24/7 nursing care gave us peace of mind. My mother needs regular medical attention, and the team here ensures she gets the best care. Highly recommended!"
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center">
                <span class="text-[#A8D5BA] font-bold text-lg">PM</span>
              </div>
              <div class="ml-4">
                <h4 class="font-bold text-[#333333]">Priya Mukherjee</h4>
                <p class="text-sm text-gray-500">Kolkata</p>
              </div>
            </div>
          </div>
          
          <!-- Testimonial 3 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg relative">
            <div class="absolute -top-4 left-8">
              <div class="w-10 h-10 bg-[#A8D5BA] rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
              </div>
            </div>
            <p class="text-gray-600 leading-relaxed mb-6 pt-4">
              "Affordable pricing without compromising on quality. The homely atmosphere and caring staff make Debanganam the best choice for elderly care in Sonarpur."
            </p>
            <div class="flex items-center">
              <div class="w-12 h-12 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center">
                <span class="text-[#A8D5BA] font-bold text-lg">SC</span>
              </div>
              <div class="ml-4">
                <h4 class="font-bold text-[#333333]">Sanjay Chakraborty</h4>
                <p class="text-sm text-gray-500">Sonarpur</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Admission CTA Section -->
    <section id="admission" class="py-20 md:py-28 bg-[#A8D5BA] relative overflow-hidden">
      <!-- Decorative Elements -->
      <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
      
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          
          <div class="reveal">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-[#333333]">
              Admission Process Made Simple
            </h2>
            <p class="text-lg text-[#333333]/80 leading-relaxed mb-8">
              We've streamlined our admission process to make it easy for families. Contact us today to schedule a visit and learn about our services.
            </p>
            
            <div class="space-y-4 mb-8">
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#A8D5BA] font-bold">1</div>
                <span class="text-[#333333] font-medium">Call or WhatsApp us for inquiry</span>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#A8D5BA] font-bold">2</div>
                <span class="text-[#333333] font-medium">Schedule a visit to our facility</span>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#A8D5BA] font-bold">3</div>
                <span class="text-[#333333] font-medium">Complete paperwork and medical assessment</span>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#A8D5BA] font-bold">4</div>
                <span class="text-[#333333] font-medium">Welcome your loved one to Debanganam</span>
              </div>
            </div>
          </div>
          
          <div class="reveal bg-white rounded-3xl p-8 shadow-2xl">
            <h3 class="text-2xl font-bold mb-6 text-center text-[#333333]">Enquire Now</h3>
            <form id="admission-form" class="space-y-5">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#A8D5BA] focus:ring-2 focus:ring-[#A8D5BA]/20 outline-none transition-all" placeholder="Enter your name">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#A8D5BA] focus:ring-2 focus:ring-[#A8D5BA]/20 outline-none transition-all" placeholder="+91 XXXXX XXXXX">
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message (Optional)</label>
                <textarea id="message" name="message" rows="3" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#A8D5BA] focus:ring-2 focus:ring-[#A8D5BA]/20 outline-none transition-all resize-none" placeholder="Tell us about your requirements"></textarea>
              </div>
              <button type="submit" class="w-full px-8 py-4 bg-[#E53935] text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300">
                Submit Enquiry
              </button>
            </form>
            <p class="text-center text-sm text-gray-500 mt-4">We will call you back within 24 hours</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 md:py-28">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
          <span class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-medium mb-4">Contact Us</span>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Get In <span class="text-[#A8D5BA]">Touch With Us</span>
          </h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Have questions? We're here to help. Reach out to us through any of the following channels.
          </p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
          
          <!-- Contact Card 1 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
            <div class="w-16 h-16 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3">Call Us</h3>
            <a href="tel:+917605869720" class="text-[#E53935] font-semibold text-lg hover:underline">+91 7605869720</a>
            <p class="text-gray-500 text-sm mt-2">Available 24/7</p>
          </div>
          
          <!-- Contact Card 2 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
            <div class="w-16 h-16 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3">WhatsApp</h3>
            <a href="https://wa.me/917605869720" target="_blank" rel="noopener" class="text-[#25D366] font-semibold text-lg hover:underline">+91 7605869720</a>
            <p class="text-gray-500 text-sm mt-2">Quick response guaranteed</p>
          </div>
          
          <!-- Contact Card 3 -->
          <div class="reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow">
            <div class="w-16 h-16 bg-[#A8D5BA]/20 rounded-full flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-[#A8D5BA]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-3">Location</h3>
            <p class="text-gray-600 font-medium">Sonarpur, Kolkata</p>
            <p class="text-gray-500 text-sm mt-2">West Bengal, India</p>
          </div>
        </div>
        
        <!-- Map Embed -->
        <div class="reveal rounded-3xl overflow-hidden shadow-xl">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58751.65842625527!2d88.35190268879394!3d22.457884629598623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027a9b9c5c9c3f%3A0x9c43a7c6e5f0c7c7!2sSonarpur%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1699876543210!5m2!1sen!2sin"
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Debanganam Old Age Home Location Map Sonarpur Kolkata"
          ></iframe>
        </div>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
