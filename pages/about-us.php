<?php include('../includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Car Rental Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body { font-family: 'Poppins', sans-serif; }

    /* Fade-in scroll animations */
    .animated-item {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .animated-item.is-visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Our Story image fade */
    #storyImage {
      transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }

    /* Stats number animation */
    .stat-number {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .stat-number.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Accordion */
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease, padding 0.3s ease;
      padding-top: 0;
      padding-bottom: 0;
    }
    .accordion-content.active {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }
    .accordion-toggle i {
      transition: transform 0.3s ease-in-out;
    }
    .accordion-toggle.active i {
      transform: rotate(180deg);
    }
  </style>
</head>
<body class="bg-[#011A27] text-white">
<main class="pt-6 px-6">


  <!-- Hero Section -->
  <section class="relative text-center mb-12 py-12  bg-gradient-to-r from-[#011A27] via-[#1a384f] to-[#011A27] rounded-xl shadow-lg animated-item">
    <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 relative z-10">About <span class="text-[#F0810F]">Us</span></h1>
    <p class="text-gray-300 text-lg md:text-xl max-w-3xl mx-auto relative z-10">
      We are your trusted partner for car rentals, successful trips, and unforgettable journeys. Our mission is to keep you happy, safe, and moving.
    </p>
    <div class="absolute inset-0 bg-black opacity-30 rounded-xl"></div>
  </section>

  <!-- Our Story Card -->
  <section class="mb-20 flex justify-center">
    <div class="bg-white/10 backdrop-blur-md rounded-xl shadow-xl p-10 md:p-12 max-w-5xl w-full flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8 animated-item">
      <div class="flex-1">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our <span class="text-[#F0810F]">Story</span></h2>
        <p class="text-gray-300 mb-4 leading-relaxed text-justify">
          Founded over three decades ago, our journey began with a simple passion: to make car travel accessible, enjoyable, and hassle-free for everyone. 
        </p>
        <p class="text-gray-300 leading-relaxed text-justify">
          Every milestone, every happy customer, and every successful trip has shaped who we are today. We pride ourselves on building lasting relationships through trust, transparency, and unparalleled service.
        </p>
      </div>
      <div class="flex-shrink-0 w-64 h-64 md:w-72 md:h-72 rounded-lg overflow-hidden shadow-lg">
        <img id="storyImage" src="../uploads/caff.jpg" alt="Our Story Image" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <script>
    // Our Story Image Slideshow
    const images = ["../uploads/caff.jpg","../uploads/car.jpg","../uploads/mandiee.jpg","../uploads/view.jpg"];
    let currentIndex = 0;
    const storyImg = document.getElementById("storyImage");

    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      storyImg.style.opacity = 0;
      storyImg.style.transform = "scale(0.95)";
      setTimeout(() => {
        storyImg.src = images[currentIndex];
        storyImg.style.opacity = 1;
        storyImg.style.transform = "scale(1)";
      }, 500);
    }, 3000);
  </script>

  <!-- Mission & Vision -->
  <section class="grid md:grid-cols-2 gap-8 mb-20">
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg animated-item">
      <h2 class="text-3xl font-semibold text-[#F0810F] mb-4">Our Mission</h2>
      <p class="text-gray-300 text-lg">To provide safe, reliable, and affordable car rental services that make travel convenient and enjoyable for our customers, fostering memorable experiences on every journey.</p>
    </div>
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg animated-item delay-1">
      <h2 class="text-3xl font-semibold text-[#F0810F] mb-4">Our Vision</h2>
      <p class="text-gray-300 text-lg">To become the most trusted and customer-centric car rental company globally, renowned for excellence in service, sustainable practices, and continuous innovation in mobility solutions.</p>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="grid sm:grid-cols-2 md:grid-cols-4 gap-8 mb-20 text-center">
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:scale-105 transition duration-300 animated-item">
      <h2 class="text-5xl font-bold text-[#F0810F] stat-number" data-target="30">0</h2>
      <p class="text-gray-300 mt-2 text-lg font-semibold">Years of Experience</p>
    </div>
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:scale-105 transition duration-300 animated-item delay-1">
      <h2 class="text-5xl font-bold text-[#F0810F] stat-number" data-target="5000">0</h2>
      <p class="text-gray-300 mt-2 text-lg font-semibold">Happy Customers</p>
    </div>
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:scale-105 transition duration-300 animated-item delay-2">
      <h2 class="text-5xl font-bold text-[#F0810F] stat-number" data-target="100000">0</h2>
      <p class="text-gray-300 mt-2 text-lg font-semibold">Successful Trips</p>
    </div>
    <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 shadow-lg hover:scale-105 transition duration-300 animated-item delay-3">
      <h2 class="text-5xl font-bold text-[#F0810F] stat-number" data-target="500">0</h2>
      <p class="text-gray-300 mt-2 text-lg font-semibold">Vehicles in Fleet</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="mb-20">
    <h2 class="text-4xl font-bold text-center mb-12 animated-item">Our <span class="text-[#F0810F]">Services</span></h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 text-center shadow-lg hover:-translate-y-2 transition duration-300 animated-item">
        <i class="fas fa-car-wash text-[#F0810F] text-5xl mb-4"></i>
        <h4 class="text-2xl font-semibold text-white mb-2">Premium Car Wash</h4>
        <p class="text-gray-300">Professional cleaning & detailing to keep your vehicle shiny and new.</p>
      </div>
      <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 text-center shadow-lg hover:-translate-y-2 transition duration-300 animated-item delay-1">
        <i class="fas fa-tools text-[#F0810F] text-5xl mb-4"></i>
        <h4 class="text-2xl font-semibold text-white mb-2">Expert Engine Repair</h4>
        <p class="text-gray-300">Expert mechanics for maintenance, diagnostics, and repairs.</p>
      </div>
      <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 text-center shadow-lg hover:-translate-y-2 transition duration-300 animated-item delay-2">
        <i class="far fa-calendar-check text-[#F0810F] text-5xl mb-4"></i>
        <h4 class="text-2xl font-semibold text-white mb-2">Seamless Online Booking</h4>
        <p class="text-gray-300">Book online easily and enjoy guaranteed time slots for your convenience.</p>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="mb-20 max-w-4xl mx-auto">
    <h2 class="text-4xl font-bold text-center mb-12 animated-item">Frequently Asked <span class="text-[#F0810F]">Questions</span></h2>
    <div class="space-y-4">
      <?php 
        $faqs = [
          ["How can I book a car?", "You can easily book a car through our website, mobile app, or by calling our customer service hotline. Our online booking system is available 24/7."],
          ["What are your rental requirements?", "Typically, renters must be at least 21 years old, possess a valid driver's license, and a major credit card."],
          ["Can I modify or cancel my reservation?", "Yes, you can modify or cancel your reservation online or by contacting our support team."],
          ["What is included in the rental price?", "Our rental prices typically include the base rental rate, standard insurance, and unlimited mileage."]
        ];
        foreach($faqs as $index => $faq) {
      ?>
      <div class="bg-white/10 backdrop-blur-md rounded-xl shadow-lg">
        <button class="w-full text-left p-6 flex justify-between items-center text-xl font-semibold text-white accordion-toggle" aria-expanded="false">
          <?= $faq[0]; ?>
          <i class="fas fa-chevron-down transform transition-transform duration-300"></i>
        </button>
        <div class="accordion-content p-6 pt-0 text-gray-300 text-lg">
          <?= $faq[1]; ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="text-center py-10 bg-[#F0810F] rounded-xl shadow-xl mb-20 animated-item">
    <h2 class="text-4xl font-bold text-white mb-6">Have More Questions?</h2>
    <p class="text-white text-lg max-w-2xl mx-auto mb-8">
      Our friendly team is always here to help. Get in touch with us for any inquiries or support.
    </p>
    <a href="contactus.php" 
   class="inline-block bg-[#F0810F] text-white font-semibold px-10 py-4 rounded-full shadow-lg hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
   Contact Us Today
</a>

  </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Scroll Animations
  const animatedItems = document.querySelectorAll('.animated-item');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  animatedItems.forEach(item => observer.observe(item));

  // FAQ Accordion
  const toggles = document.querySelectorAll('.accordion-toggle');
  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const content = toggle.nextElementSibling;
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggles.forEach(t => {
        t.setAttribute('aria-expanded', 'false');
        t.classList.remove('active');
        t.nextElementSibling.style.maxHeight = null;
        t.nextElementSibling.classList.remove('active');
      });
      if(!expanded){
        toggle.setAttribute('aria-expanded', 'true');
        toggle.classList.add('active');
        content.style.maxHeight = content.scrollHeight + "px";
        content.classList.add('active');
      }
    });
  });

  // Stats Count-Up Animation
  const stats = document.querySelectorAll('.stat-number');
  stats.forEach(stat => {
    const updateCount = () => {
      const target = +stat.getAttribute('data-target');
      const current = +stat.innerText.replace(/,/g, '');
      const increment = target / 200;

      if(current < target){
        stat.innerText = Math.ceil(current + increment).toLocaleString();
        setTimeout(updateCount, 20);
      } else {
        stat.innerText = target.toLocaleString();
      }
    };

    const statObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if(entry.isIntersecting && !stat.classList.contains('visible')){
          stat.classList.add('visible');
          updateCount();
          statObserver.unobserve(stat);
        }
      });
    }, {threshold: 0.5});
    statObserver.observe(stat);
  });
});
</script>

</body>
</html>

<?php include('../includes/footer.php'); ?>
about us