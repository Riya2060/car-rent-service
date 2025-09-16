<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - CarRent</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Poppins', sans-serif; }
    /* Blur background overlay */
    .bg-blur {
        background: url('/../images/index.png') no-repeat center center/cover;
        filter: blur(2px);
        position: fixed;
        inset: 0;
        z-index: -1;
    }
</style>
</head>
<body class="flex items-center justify-center min-h-screen bg-[#011A27] relative">

<!-- Background blur -->
<div class="bg-blur"></div>

<!-- Login Card -->
<div class="relative bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl shadow-2xl w-full max-w-4xl flex overflow-hidden">

    <!-- Left Image -->
    <div class="w-1/2 hidden md:flex items-center justify-center">
        <img src="/../images/login-car.png" alt="Login Car" class="object-cover h-full w-full">
    </div>

    <!-- Right Form -->
    <div class="w-full md:w-1/2 p-6 md:p-10 relative flex flex-col justify-center">
        <!-- Close Button -->
        <a href="/../index.php" class="absolute top-4 right-4 text-gray-200 hover:text-white bg-white/5 hover:bg-white/10 p-2 rounded-full text-xl font-bold">✕</a>

        <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-4 md:mb-6">Login to Your Account</h2>

        <form action="login_process.php" method="POST" class="space-y-4 md:space-y-5">
            <input type="email" name="email" placeholder="Email Address" required
                class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            <button type="submit"
                class="w-full bg-[#F0810F] text-white py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-300 mt-4">
            Don't have an account? 
            <a href="register.php" class="text-[#F0810F] font-medium hover:underline">Register</a>
        </p>
    </div>
</div>

</body>
</html>
