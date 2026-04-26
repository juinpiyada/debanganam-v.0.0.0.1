<?php 
  $pageTitle = "Gallery | Debanganam Old Age Home Kolkata";
  $pageDescription = "View the gallery of Debanganam Old Age Home, showcasing our clean rooms, medical beds, nutritious food, dedicated staff, and engaging activities for the elderly.";
  include 'header.php'; 
?>

  <!-- Gallery Hero Section -->
  <section class="py-20 md:py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16 reveal">
        <div class="inline-block px-4 py-2 bg-[#A8D5BA]/20 text-[#333333] rounded-full text-sm font-bold mb-4 uppercase tracking-widest">Visual Tour</div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#333333] mb-6">Our <span class="text-[#A8D5BA]">Gallery</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">A glimpse into the daily life, premium facilities, and the compassionate environment we provide for our residents.</p>
      </div>

      <!-- Gallery Filter (Optional UI Enhancement) -->
      <div class="flex flex-wrap justify-center gap-4 mb-12 reveal">
        <button class="px-6 py-2 rounded-full bg-[#A8D5BA] text-white font-bold shadow-md hover:scale-105 transition-all">All Photos</button>
        <button class="px-6 py-2 rounded-full bg-gray-100 text-[#333333] font-bold hover:bg-[#A8D5BA]/20 transition-all">Rooms</button>
        <button class="px-6 py-2 rounded-full bg-gray-100 text-[#333333] font-bold hover:bg-[#A8D5BA]/20 transition-all">Medical</button>
        <button class="px-6 py-2 rounded-full bg-gray-100 text-[#333333] font-bold hover:bg-[#A8D5BA]/20 transition-all">Staff</button>
        <button class="px-6 py-2 rounded-full bg-gray-100 text-[#333333] font-bold hover:bg-[#A8D5BA]/20 transition-all">Activities</button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Category: Rooms -->
        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square">
          <img src="img/img-3.jpeg" alt="Clean elderly care room in Sonarpur Kolkata with ventilation and comfort" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Premium Rooms</span>
          </div>
        </div>

        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.1s;">
          <img src="img/img-8.jpeg" alt="Spacious and clean living area at Debanganam old age home Kolkata" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Living Spaces</span>
          </div>
        </div>

        <!-- Category: Beds -->
        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.2s;">
          <img src="img/img-5.jpeg" alt="Medical grade hospital bed for seniors in Kolkata with safety rails" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Medical Beds</span>
          </div>
        </div>

        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.3s;">
          <img src="img/img-9.jpeg" alt="Adjustable semi-electric nursing bed at old age home Sonarpur" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Patient Support</span>
          </div>
        </div>

        <!-- Category: Food -->
        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.4s;">
          <img src="img/img2.jpeg" alt="Nutritious and hygienic food for elderly at Debanganam dining area" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Hygienic Dining</span>
          </div>
        </div>

        <!-- Category: Staff -->
        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.5s;">
          <img src="img/img-6.jpeg" alt="Caring staff supporting residents at old age home in Kolkata" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Dedicated Staff</span>
          </div>
        </div>

        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.6s;">
          <img src="img/img-10.jpeg" alt="Professional nursing staff providing medical checkups for residents" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Nursing Support</span>
          </div>
        </div>

        <!-- Category: Activities -->
        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.7s;">
          <img src="img/img-4.jpeg" alt="Residents participating in group yoga and meditation activities" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Daily Activities</span>
          </div>
        </div>

        <div class="reveal group relative overflow-hidden rounded-[2.5rem] shadow-xl aspect-square" style="transition-delay: 0.8s;">
          <img src="img/img-7.jpeg" alt="Social gathering and happy moments at old age home Sonarpur Kolkata" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div class="absolute inset-0 bg-gradient-to-t from-[#333333]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
            <span class="text-white font-bold text-xl uppercase tracking-widest">Social Life</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-[#A8D5BA] rounded-[4rem] p-12 md:p-20 flex flex-col md:flex-row items-center justify-between gap-8 reveal">
        <div class="text-center md:text-left">
          <h2 class="text-3xl md:text-4xl font-extrabold text-[#333333] mb-4">See It For Yourself</h2>
          <p class="text-lg text-[#333333]/80">Schedule a personal visit to our home in Sonarpur today.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="index.php#contact" class="px-10 py-5 bg-[#E53935] text-white font-bold rounded-full shadow-2xl hover:scale-105 transition-transform">Book a Visit</a>
          <a href="tel:+917605869720" class="px-10 py-5 bg-white text-[#333333] font-bold rounded-full shadow-lg hover:bg-gray-100 transition-all">Call Us</a>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
