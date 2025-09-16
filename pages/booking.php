<?php include('../includes/header.php'); ?>

<!-- Booking Page -->
<main class="bg-[#021017] text-white min-h-screen py-20 px-6">
    <div class="container mx-auto max-w-5xl">
        <!-- Title -->
        <h2 class="text-4xl font-bold text-center mb-4">
            Book Your <span class="text-[#F0810F]">Ride</span>
        </h2>
        <p class="text-center text-gray-400 mb-12">
            Choose your ride, fill in the details, and confirm your booking instantly.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Booking Form -->
            <form action="process-booking.php" method="POST" 
                  class="md:col-span-2 grid grid-cols-1 gap-8 bg-white/10 backdrop-blur-sm rounded-xl p-8 shadow-lg">

                <!-- Step 1: Personal Info -->
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-[#E6DF44]">👤 Personal Information</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" name="fullname" placeholder="Full Name" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="email" name="email" placeholder="Email Address" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="tel" name="phone" placeholder="Phone Number" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="number" name="passengers" placeholder="No. of Passengers" min="1" max="10" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                    </div>
                </div>

                <!-- Step 2: Booking Details -->
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-[#E6DF44]">🚘 Booking Details</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <select name="vehicle_type" required
                                class="px-4 py-3 rounded-lg bg-white/10 text-white focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                            <option disabled selected>Select Vehicle Type</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                            <option>Van</option>
                            <option>Luxury</option>
                        </select>
                        <input type="date" name="booking_date" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="time" name="booking_time" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="text" name="pickup_location" placeholder="Pickup Location" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                        <input type="text" name="drop_location" placeholder="Drop Location" required
                               class="px-4 py-3 rounded-lg bg-white/10 text-white placeholder-gray-300 
                                      focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                    </div>
                </div>

                <!-- Notes -->
                <textarea name="notes" placeholder="Additional Notes (Optional)" rows="3"
                          class="px-4 py-3 rounded-lg bg-white/10 text-white 
                                 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]"></textarea>

                <!-- Submit -->
                <button type="submit" 
                        class="bg-gradient-to-r from-[#F0810F] to-[#E6DF44] text-[#011A27] px-8 py-4 rounded-lg font-bold 
                               hover:opacity-90 transition duration-300 transform hover:scale-105">
                    🚖 Confirm Booking
                </button>
            </form>

            <!-- Ride Preview Card -->
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 shadow-lg text-center">
                <h3 class="text-xl font-semibold text-[#F0810F] mb-4">Selected Ride</h3>
                <img src="images/sedan.jpg" alt="Selected Vehicle" class="w-full h-40 object-cover rounded-lg mb-4">
                <p class="text-lg font-semibold">Sedan</p>
                <p class="text-gray-400">Comfortable, fuel efficient, and perfect for city rides.</p>
                <p class="mt-4 text-[#E6DF44] font-bold text-xl">$50 / Day</p>
                <button class="mt-6 bg-[#F0810F] px-6 py-2 rounded-lg hover:bg-[#E6DF44] hover:text-[#011A27] transition">
                    Change Ride
                </button>
            </div>
        </div>
    </div>
</main>

<?php include('../includes/footer.php'); ?>
