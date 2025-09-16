<?php
// register.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - CarRent</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="flex items-center justify-center min-h-screen bg-[#011A27] relative">

<!-- Background blur from index -->
<div class="bg-blur"></div>

<!-- Register Card -->
<div class="relative bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl shadow-2xl w-full max-w-3xl flex overflow-hidden">
 <!-- Left Image (full left half) -->
    <div class="w-1/2 hidden md:flex items-center justify-center">
        <img src="/../images/scorpio.jpg" alt="Register Car" class="object-cover h-full w-full">
    </div>

    <!-- Right Form -->
    <div class="w-full md:w-1/2 p-6 md:p-8 relative">
        <!-- Close Button -->
        <a href="/../index.php" class="absolute top-4 right-4 text-gray-200 hover:text-white bg-white/5 hover:bg-white/10 p-2 rounded-full text-xl font-bold">✕</a>

        <h2 class="text-2xl md:text-3xl font-bold text-center text-white mb-4 md:mb-6">Create Your Account</h2>

        <form action="register_process.php" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-5">
            <!-- Name -->
            <div>
                <input type="text" id="name" name="name" placeholder="Full Name" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            </div>

            <!-- Email -->
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            </div>

            <!-- Phone -->
            <div>
                <input type="text" id="phone" name="phone" placeholder="Phone Number" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            </div>

            <!-- Password -->
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]">
            </div>

            <!-- Address -->
            <div>
                <textarea id="address" name="address" rows="2" placeholder="Address" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-[#F0810F]"></textarea>
            </div>

            <!-- Image Upload -->
            <div>
                <input type="file" id="profile_image" name="profile_image" accept="image/*"
                    class="w-full text-white file:bg-[#F0810F] file:text-white file:px-4 file:py-2 file:rounded-lg file:border-none file:cursor-pointer hover:file:bg-[#E6DF44] hover:file:text-[#011A27]">
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-[#F0810F] text-white py-2 rounded-lg font-semibold hover:bg-[#E6DF44] hover:text-[#011A27] transition duration-300 transform hover:scale-105">
                Register
            </button>
        </form>

        <p class="text-center text-sm text-gray-300 mt-4">
            Already have an account? 
            <a href="login.php" class="text-[#F0810F] font-medium hover:underline">Login</a>
        </p>
    </div>
</div>

</body>
</html>
