<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Services - Home</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 0.5s ease-out forwards; }
        .fade-in-delay-1 { animation-delay: 0.2s; }
        .fade-in-delay-2 { animation-delay: 0.4s; }
        .fade-in-delay-3 { animation-delay: 0.6s; }

        @keyframes carDrive {
            0% { transform: translateX(-150px); }
            100% { transform: translateX(100vw); }
        }
        .car-animate {
            animation: carDrive 5s linear infinite;
            position: absolute;
            bottom: 20px;
            left: 0;
            height: 80px;
            z-index: 30;
        }
    </style>
</head>
<body class="bg-[#011A27] text-white overflow-x-hidden">
   

<!-- Header -->
<header class="bg-white text-[#011A27] shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-1 py-2 flex justify-between items-center">
        <a href="index.php">
            <img src="/../images/logo.png" alt="CarRent Logo" class="h-16 w-auto">
        </a>

        <!-- Menu for Desktop -->
        <div class="hidden md:flex items-center space-x-8 font-medium">
            <a href="/../index.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">Home</a>
            <a href="/../bookings.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">Bookings</a>
            <a href="/../pages/services.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">Services</a>
            <a href="/../blog.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">Blog</a>
            <a href="/../pages/about-us.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">About Us</a>
            <a href="/../pages/contactus.php" class="text-[#011A27] hover:text-[#F0810F] transition duration-300">Contact Us</a>
        </div>
        
        <!-- Login/Register Buttons -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="/../auth/login.php" class="bg-[#F0810F] text-white px-5 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
                Login
            </a>
            <a href="/../auth/register.php"
   class="bg-[#F0810F] text-white px-5 py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
   Register
</a>

        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button class="text-[#011A27] focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>
