<?php 
  $pageTitle = "Page Not Found | Debanganam Old Age Home";
  $pageDescription = "The page you are looking for does not exist. Return to Debanganam Old Age Home home page for elderly care in Kolkata.";
  include 'header.php'; 
?>

  <section class="py-20 md:py-32 bg-white flex items-center justify-center min-h-[70vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="reveal">
        <!-- 404 Image -->
        <div class="max-w-md mx-auto mb-10">
          <img src="img/404.png" alt="404 Page Not Found" class="w-full h-auto drop-shadow-2xl">
        </div>
        
        <h1 class="text-4xl md:text-6xl font-black text-[#333333] mb-6">
          Oops! <span class="text-[#E53935]">Lost Way?</span>
        </h1>
        
        <p class="text-lg text-gray-600 mb-12 max-w-lg mx-auto">
          The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="index.php" class="px-10 py-5 bg-[#A8D5BA] text-white font-bold rounded-full shadow-lg hover:bg-[#8bc4a3] hover:scale-105 transition-all">
            Back to Home
          </a>
          <a href="contact.php" class="px-10 py-5 bg-[#333333] text-white font-bold rounded-full shadow-lg hover:bg-[#222222] hover:scale-105 transition-all">
            Contact Support
          </a>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>
