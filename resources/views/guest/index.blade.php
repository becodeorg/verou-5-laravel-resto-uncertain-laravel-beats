<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/beets-logo.png') }}">
</head>
<body class="bg-red-50">
<nav class="bg-red-50 w-full flex justify-between items-center px-20 py-4">
    <!-- Logo -->
    <div class="flex items-center">
        <img class="h-8 w-auto pr-6" src="{{ asset('images/beets-logo.png') }}" alt="Beets Restaurant">
    </div>

    <!-- Navigation Items -->
    <div class="flex justify-center flex-grow">
        <div class="flex space-x-4">
            <a href="#" class="text-red-900 hover:bg-red-300 hover:text-red-900 rounded-full px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            <a href="#" class="text-red-900 hover:bg-red-300 hover:text-red-900 rounded-full px-3 py-2 text-sm font-medium">Menu</a>
            <a href="#" class="text-red-900 hover:bg-red-300 hover:text-red-900 rounded-full px-3 py-2 text-sm font-medium">About Us</a>
            <a href="#" class="text-red-900 hover:bg-red-300 hover:text-red-900 rounded-full px-3 py-2 text-sm font-medium">Contact</a>
        </div>
    </div>

    <!-- Booking Button -->
    <div>
        <a href="#" class="bg-red-800 hover:bg-green-800 text-white rounded-full px-4 py-2 text-sm font-medium">Book a Table</a>
    </div>
</nav>

<section class="h-screen relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('images/bg-home-guest.png') }}');">
    <!-- Overlay with translucent white -->
    <div class="absolute inset-0 bg-white bg-opacity-10"></div>
    
    <!-- Your content with adjusted text color -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-gray-900">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">Beat Our Beets</h1>
        <p class="text-lg sm:text-xl md:text-2xl mb-8">Indulge in a unique culinary experience at our restaurant, <br>where every dish celebrates the vibrant and versatile beetroot in innovative and delicious ways.</p>
        <div>
            <a href="#services" class="bg-red-800 hover:bg-green-800 font-semibold py-3 px-6 rounded-full text-white text-lg transition duration-300 ease-in-out transform hover:scale-105">Show Menu</a>
            <a href="#services" class="bg-red-800 hover:bg-green-800 font-semibold py-3 px-6 rounded-full text-white text-lg transition duration-300 ease-in-out transform hover:scale-105">Book a Table</a>
        </div>
    </div>
</section>



<section class="py-12 lg:py-24">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 lg:px-0">
        <!-- Picture on the left -->
        <div class="lg:w-1/2 lg:px-8 mb-8 lg:mb-0">
            <img src="{{ asset('images/beets-menu-guest.jpg') }}" alt="Beet Dishes" class="w-full h-auto rounded-lg">
        </div>
        <!-- Information on the right -->
        <div class="lg:w-1/2 px-6 lg:px-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Discover Our Beetsy Menu</h2>
            <p class="text-lg text-gray-700 mb-6">Explore our wide range of dishes crafted with the finest beets sourced from local farmers. From salads to main courses and desserts, we have something delightful for everyone.</p>
            <p class="text-lg text-gray-700 mb-6">Our chefs blend tradition with innovation, ensuring each dish is a unique experience that tantalizes your taste buds and leaves you craving more.</p>
            <a href="#" class="bg-red-800 hover:bg-green-800 text-white font-semibold py-4 px-8 rounded-full text-lg transition duration-300 ease-in-out transform hover:scale-105">Explore Our Menu</a>
        </div>
    </div>
</section>





</body>
</html>