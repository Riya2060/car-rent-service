<?php 
    include('includes/header.php'); 
?>

<main class="bg-[#011A27] text-white font-sans">

    <!-- Hero Section -->
    <section class="relative h-[50vh] flex flex-col items-center justify-center text-center overflow-hidden bg-gradient-to-b from-[#021017] to-[#011A27]">
        <h1 class="text-5xl md:text-6xl font-extrabold animate-fadeInDown">
            Our <span class="text-[#F0810F]">Packages</span>
        </h1>
        <p class="text-gray-400 mt-4 text-lg md:text-xl animate-fadeIn delay-200">Choose the perfect ride package for your journey</p>

        <!-- Animated background circles -->
        <div class="absolute w-72 h-72 bg-[#F0810F]/20 rounded-full top-10 left-10 animate-bounce-slow"></div>
        <div class="absolute w-56 h-56 bg-[#E6DF44]/20 rounded-full bottom-10 right-10 animate-bounce-slow animation-delay-500"></div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 px-6 max-w-7xl mx-auto">
        <h3 class="text-4xl font-bold text-center mb-12 font-serif">Choose Your <span class="text-[#F0810F]">Package</span></h3>
        
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Card 1 -->
            <div class="relative bg-[#021017] rounded-xl shadow-xl overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-500 animate-fadeIn">
                <img src="images/package-sedan.jpg" alt="Sedan Package" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-2 font-serif">Sedan Package</h4>
                    <p class="text-gray-300 mb-4">Comfortable and stylish sedans perfect for city travel and business trips.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold">$50/day</span>
                        <a href="book.php?package=sedan" class="bg-[#F0810F] text-[#011A27] px-4 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-[#021017] rounded-xl shadow-xl overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-500 animate-fadeIn delay-200">
                <!-- Ribbon Badge -->
                <div class="absolute top-0 right-0 bg-[#F0810F] px-4 py-1 text-sm font-bold rounded-bl-lg">Most Popular</div>
                <img src="images/package-suv.jpg" alt="SUV Package" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-2 font-serif">SUV Package</h4>
                    <p class="text-gray-300 mb-4">Spacious SUVs suitable for family trips and long-distance journeys.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold">$80/day</span>
                        <a href="book.php?package=suv" class="bg-[#F0810F] text-[#011A27] px-4 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-[#021017] rounded-xl shadow-xl overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-500 animate-fadeIn delay-400">
                <img src="images/package-luxury.jpg" alt="Luxury Package" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-2 font-serif">Luxury Package</h4>
                    <p class="text-gray-300 mb-4">Premium luxury cars for special occasions, corporate events, or VIP trips.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold">$150/day</span>
                        <a href="book.php?package=luxury" class="bg-[#F0810F] text-[#011A27] px-4 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">Book Now</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- Custom Animations -->
<style>
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes bounceSlow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-fadeIn { animation: fadeIn 0.8s ease-out forwards; }
    .animate-fadeIn.delay-200 { animation-delay: 0.2s; }
    .animate-fadeIn.delay-400 { animation-delay: 0.4s; }
    .animate-fadeInDown { animation: fadeInDown 1s ease-out forwards; }
    .animate-bounce-slow { animation: bounceSlow 4s infinite ease-in-out; }
    .animation-delay-500 { animation-delay: 0.5s; }
</style>

<?php 
    include('includes/footer.php'); 
?>
