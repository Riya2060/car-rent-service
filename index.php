<?php include('includes/header.php'); ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-[92vh] w-full text-center text-white overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-[#011A27]"></div>

        <div class="relative z-20 flex flex-col items-center justify-center h-full px-6">
            <h1 class="text-5xl md:text-7xl font-bold mb-4 fade-in">
                Find Your <span class="text-[#F0810F]"><span id="animatedText"></span></span> Ride
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto fade-in fade-in-delay-1" id="heroCaption">
                Over 30+ years of trusted service in vehicle care & rental. Experience the best with us.
            </p>
            <a href="packages.php" class="bg-[#F0810F] text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105 fade-in fade-in-delay-2">
                Explore Packages
            </a>
        </div>

        <img src="images/car2.png" alt="Car Animation" class="car-animate">
    </section>

    <!-- Services Section -->
    <section class="py-20 px-6 bg-[#021017]">
        <div class="container mx-auto">
            <h3 class="text-4xl font-bold text-center mb-2">Our <span class="text-[#F0810F]">Services</span></h3>
            <p class="text-center text-gray-400 mb-12">We provide reliable car rental services with professional drivers and convenient booking options.</p>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition duration-500 transform hover:-translate-y-2 hover:scale-105 hover:bg-white/20 services-card">
                    <img src="images/icon-booking.png" alt="On-time Booking" class="h-20 w-20 mx-auto mb-4 animate-bounce">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">On-time Booking</h4>
                    <p class="text-gray-300">Book your car online easily and get guaranteed pickup at your scheduled time.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition duration-500 transform hover:-translate-y-2 hover:scale-105 hover:bg-white/20 services-card">
                    <img src="images/icon-driver.png" alt="Driver Service" class="h-20 w-20 mx-auto mb-4 animate-bounce">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">Professional Driver</h4>
                    <p class="text-gray-300">Experienced drivers provide safe and comfortable rides for all your trips.</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition duration-500 transform hover:-translate-y-2 hover:scale-105 hover:bg-white/20 services-card">
                    <img src="images/icon-support.png" alt="Customer Support" class="h-20 w-20 mx-auto mb-4 animate-bounce">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">24/7 Support</h4>
                    <p class="text-gray-300">Our support team is available round the clock to assist you with bookings or inquiries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us with Counters -->
    <section class="py-20 px-6 bg-[#011A27]">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-2">Why <span class="text-[#E6DF44]">Choose Us?</span></h3>
            <p class="text-center text-gray-400 mb-12 max-w-2xl mx-auto">We provide an unmatched level of service and a commitment to customer satisfaction.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="border border-[#F0810F] rounded-lg p-6">
                    <h4 class="text-4xl font-bold text-[#F0810F] counter" data-target="30">0</h4>
                    <p class="font-semibold mt-2">Years of Experience</p>
                </div>
                <div class="border border-[#F0810F] rounded-lg p-6">
                    <h4 class="text-4xl font-bold text-[#F0810F] counter" data-target="100">0</h4>
                    <p class="font-semibold mt-2">Cars in Fleet</p>
                </div>
                <div class="border border-[#F0810F] rounded-lg p-6">
                    <h4 class="text-4xl font-bold text-[#F0810F] counter" data-target="5000">0</h4>
                    <p class="font-semibold mt-2">Happy Customers</p>
                </div>
                <div class="border border-[#F0810F] rounded-lg p-6">
                    <h4 class="text-4xl font-bold text-[#F0810F] counter" data-target="24">0</h4>
                    <p class="font-semibold mt-2">Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews / Testimonials Section -->
    <section class="py-20 px-6 bg-[#021017]">
        <div class="container mx-auto max-w-4xl text-center">
            <h3 class="text-4xl font-bold mb-8 text-white">What Our <span class="text-[#F0810F]">Customers Say</span></h3>
            <div id="testimonialSlider" class="flex transition-transform duration-700 ease-in-out">
                <div class="min-w-full px-6">
                    <p class="text-gray-300 text-lg italic">"Amazing service! The car was in perfect condition and the driver was very professional."</p>
                    <h5 class="text-[#F0810F] font-semibold mt-4">– Sarah J.</h5>
                </div>
                <div class="min-w-full px-6">
                    <p class="text-gray-300 text-lg italic">"Booking was super easy. The ride was comfortable and on time. Highly recommend!"</p>
                    <h5 class="text-[#F0810F] font-semibold mt-4">– Michael R.</h5>
                </div>
                <div class="min-w-full px-6">
                    <p class="text-gray-300 text-lg italic">"Professional drivers and excellent support. I always rent from here for my trips."</p>
                    <h5 class="text-[#F0810F] font-semibold mt-4">– Emma L.</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="py-20 px-6 bg-[#011A27]">
        <div class="container mx-auto text-center">
            <h3 class="text-4xl font-bold mb-2">
                Our <span class="text-[#F0810F] special-offer-title">Special Offers</span>
            </h3>
            <p class="text-gray-400 mb-12 max-w-2xl mx-auto">
                Grab these amazing deals on our car rental services. Limited time only!
            </p>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Offer 1 -->
                <div class="offer-card bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition-transform duration-500 transform hover:-translate-y-4 hover:scale-105 hover:rotate-1 relative overflow-hidden">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">Weekend Special</h4>
                    <p class="text-gray-300 mb-4">
                        Get 20% off on weekend rentals for all car types. Enjoy your weekend in style!
                    </p>
                    <a href="packages.php" class="inline-block bg-[#F0810F] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">
                        Book Now
                    </a>
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none offer-glow"></div>
                </div>

                <!-- Offer 2 -->
                <div class="offer-card bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition-transform duration-500 transform hover:-translate-y-4 hover:scale-105 hover:rotate-1 relative overflow-hidden">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">Early Bird</h4>
                    <p class="text-gray-300 mb-4">
                        Book your ride at least 7 days in advance and get an extra 15% off. Plan ahead and save!
                    </p>
                    <a href="packages.php" class="inline-block bg-[#F0810F] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">
                        Book Now
                    </a>
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none offer-glow"></div>
                </div>

                <!-- Offer 3 -->
                <div class="offer-card bg-white/10 backdrop-blur-sm shadow-lg rounded-xl p-8 text-center transition-transform duration-500 transform hover:-translate-y-4 hover:scale-105 hover:rotate-1 relative overflow-hidden">
                    <h4 class="text-2xl font-semibold text-[#F0810F] mb-3">Long Trip Deal</h4>
                    <p class="text-gray-300 mb-4">
                        Rent a car for 5+ days and enjoy exclusive discounts on our premium fleet.
                    </p>
                    <a href="packages.php" class="inline-block bg-[#F0810F] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300">
                        Book Now
                    </a>
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none offer-glow"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion -->
    <section class="py-20 px-6 bg-[#011A27]">
        <div class="container mx-auto max-w-3xl">
            <h3 class="text-4xl font-bold mb-6 text-center">Frequently Asked <span class="text-[#E6DF44]">Questions</span></h3>
            <div class="space-y-4">
                <div class="bg-white/5 backdrop-blur-sm rounded-lg p-4 cursor-pointer faq-item">
                    <h4 class="text-white font-semibold">How can I book a car?</h4>
                    <p class="text-gray-300 mt-2 hidden">You can book a car online through our packages page by selecting your preferred vehicle and time slot.</p>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-lg p-4 cursor-pointer faq-item">
                    <h4 class="text-white font-semibold">Do you provide professional drivers?</h4>
                    <p class="text-gray-300 mt-2 hidden">Yes, all our drivers are trained professionals ensuring a safe and comfortable ride.</p>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-lg p-4 cursor-pointer faq-item">
                    <h4 class="text-white font-semibold">Can I rent a car for multiple days?</h4>
                    <p class="text-gray-300 mt-2 hidden">Absolutely! You can select your rental duration during the booking process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-16 px-6 bg-[#021017]">
        <div class="container mx-auto text-center max-w-3xl">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Stay Updated</h3>
            <p class="text-gray-400 mb-6">Subscribe to our newsletter for latest offers and car rental tips.</p>
            <form class="flex flex-col sm:flex-row gap-4 justify-center">
                <input type="email" placeholder="Enter your email" class="w-full sm:w-auto px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
                <button type="submit" class="bg-[#F0810F] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">Subscribe</button>
            </form>
        </div>
    </section>
</main>

<style>
/* Services Card Glow */
.services-card:hover {
    box-shadow: 0 0 20px 5px rgba(240,129,15,0.6);
    border-radius: 1rem;
    animation: glowPulseServices 1.5s infinite alternate;
}

@keyframes glowPulseServices {
    0% { box-shadow: 0 0 10px 3px rgba(240,129,15,0.3); }
    50% { box-shadow: 0 0 25px 8px rgba(240,129,15,0.6); }
    100% { box-shadow: 0 0 10px 3px rgba(240,129,15,0.3); }
}

/* Glow effect behind Special Offer cards */
.offer-card:hover .offer-glow {
    box-shadow: 0 0 20px 5px rgba(240,129,15,0.6);
    border-radius: 1rem;
    animation: glowPulse 1.5s infinite alternate;
}

@keyframes glowPulse {
    0% { box-shadow: 0 0 10px 3px rgba(240,129,15,0.3); }
    50% { box-shadow: 0 0 25px 8px rgba(240,129,15,0.6); }
    100% { box-shadow: 0 0 10px 3px rgba(240,129,15,0.3); }
}

/* Fade-in on scroll for offers */
.offer-card {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.offer-card.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Special Offers title pointer */
.special-offer-title {
    cursor: pointer;
}
</style>

<!-- Include Canvas Confetti -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
// Fade-in on scroll for offers
const offerCards = document.querySelectorAll('.offer-card');
const offerObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('visible');
            offerObserver.unobserve(entry.target);
        }
    });
}, {threshold: 0.2});
offerCards.forEach(card => offerObserver.observe(card));

// Confetti on hover of "Special Offers"
const specialOfferTitle = document.querySelector('.special-offer-title');
specialOfferTitle.addEventListener('mouseenter', () => {
    confetti({
        particleCount: 150,
        spread: 70,
        origin: { y: 0.6 },
        colors: ['#F0810F', '#E6DF44', '#ffffff']
    });
});

// Animated Counters
const counters = document.querySelectorAll('.counter');
const speed = 50;
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = Math.ceil(target / speed);
        if(count < target){
            counter.innerText = count + increment;
            setTimeout(updateCount, 50);
        } else {
            counter.innerText = target;
        }
    };
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                updateCount();
                observer.disconnect();
            }
        });
    }, {threshold: 1});
    observer.observe(counter);
});

// Testimonials Carousel
const slider = document.getElementById('testimonialSlider');
let index = 0;
setInterval(() => {
    index++;
    if(index >= slider.children.length) index = 0;
    slider.style.transform = `translateX(-${index * 100}%)`;
}, 5000);

// FAQ Accordion
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        const para = item.querySelector('p');
        para.classList.toggle('hidden');
    });
});

// Hero Section Animated Text
const words = ["Perfect", "Reliable", "Fast", "Comfortable", "Affordable"];
const captions = [
    "Over 30+ years of trusted service in vehicle care & rental.",
    "Experience reliability with our professional drivers.",
    "Book your ride quickly and hassle-free anytime.",
    "Enjoy comfortable rides with our premium cars.",
    "Affordable prices with unmatched service quality."
];
let textIndex = 0;
let charIndex = 0;
const typeSpeed = 100;
const pause = 2000;
const animatedText = document.getElementById("animatedText");
const heroCaption = document.getElementById("heroCaption");
function typeWord() {
    if (charIndex < words[textIndex].length) {
        animatedText.textContent += words[textIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeWord, typeSpeed);
    } else {
        heroCaption.textContent = captions[textIndex];
        setTimeout(deleteWord, pause);
    }
}
function deleteWord() {
    if (charIndex > 0) {
        animatedText.textContent = words[textIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(deleteWord, typeSpeed / 2);
    } else {
        textIndex = (textIndex + 1) % words.length;
        setTimeout(typeWord, typeSpeed);
    }
}
typeWord();
</script>

<?php include('includes/footer.php'); ?>
