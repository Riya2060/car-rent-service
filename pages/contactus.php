<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Car Rental Services</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
  </style>
</head>
<body class="bg-[#011A27] text-white">

<main class="py-16 px-6">

  <!-- Hero Section -->
  <section class="text-center mb-16 fade-in-up delay-1">
    <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4">
      Contact <span class="text-[#F0810F]">Us</span>
    </h1>
    <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto">
      Need assistance with bookings, pricing, or support?  
      Our team is just a message away!
    </p>
  </section>

  <!-- Contact Info & Form Section -->
  <section class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto mb-20">

    <!-- Contact Info -->
    <div class="space-y-8 fade-in-up delay-2">
      <h2 class="text-3xl font-bold text-[#F0810F]">Get In Touch</h2>
      <p class="text-gray-300">
        We’re available through multiple channels.  
        Reach out in the way most convenient for you.
      </p>

      <div class="space-y-6">
        <div class="flex items-center space-x-4 bg-white/5 p-4 rounded-lg hover:bg-white/10 transition">
          <span class="text-[#F0810F] text-2xl">&#128222;</span>
          <p class="text-gray-300">+977 9812345678</p>
        </div>
        <div class="flex items-center space-x-4 bg-white/5 p-4 rounded-lg hover:bg-white/10 transition">
          <span class="text-[#F0810F] text-2xl">&#9993;</span>
          <p class="text-gray-300">info@carrental.com</p>
        </div>
        <div class="flex items-center space-x-4 bg-white/5 p-4 rounded-lg hover:bg-white/10 transition">
          <span class="text-[#F0810F] text-2xl">&#127970;</span>
          <p class="text-gray-300">Pokhara, Nepal</p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-10 shadow-xl fade-in-up delay-3">
      <h2 class="text-3xl font-bold text-[#F0810F] mb-8 text-center">Send Us a Message</h2>
      <form action="#" method="POST" class="space-y-6">
        <div>
          <label class="block text-gray-300 mb-2 font-medium" for="name">Full Name</label>
          <input type="text" id="name" name="name" required 
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
        </div>
        <div>
          <label class="block text-gray-300 mb-2 font-medium" for="email">Email</label>
          <input type="email" id="email" name="email" required 
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
        </div>
        <div>
          <label class="block text-gray-300 mb-2 font-medium" for="subject">Subject</label>
          <input type="text" id="subject" name="subject" required 
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
        </div>
        <div>
          <label class="block text-gray-300 mb-2 font-medium" for="message">Message</label>
          <textarea id="message" name="message" rows="5" required 
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-[#F0810F]"></textarea>
        </div>
        <button type="submit" 
          class="w-full bg-[#F0810F] text-white px-6 py-3 rounded-lg font-semibold text-lg hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
          Send Message
        </button>
      </form>
    </div>

  </section>

  <!-- Google Map Section -->
  <section class="max-w-6xl mx-auto fade-in-up delay-3">
    <h2 class="text-3xl font-bold text-[#F0810F] mb-8 text-center">Find Us Here</h2>
    <div class="w-full h-96 rounded-2xl overflow-hidden shadow-xl">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.511097807497!2d83.96337797511543!3d28.20903298252079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995943e3e6bb0b9%3A0x842bbff1c00d239d!2sPokhara%2C%20Nepal!5e0!3m2!1sen!2sus!4v1694719983904!5m2!1sen!2sus" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

</main>

</body>
</html>

<?php include('../includes/footer.php'); ?>