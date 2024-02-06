<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/beets-logo.png') }}">
</head>
<body>
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

<!-- Welcome Section -->
    <section class="h-screen flex flex-col justify-center items-center bg-white">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6 text-center">Beat Our Beets</h1>
        <p class="text-lg sm:text-xl md:text-2xl text-gray-700 mb-8 text-center">Explore our services and products designed just for you.</p>
        <div>
        <a href="#services" class="bg-red-800 hover:bg-green-800 text-white font-semibold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out transform hover:scale-105">Show Menu</a>
        <a href="#services" class="bg-red-800 hover:bg-green-800 text-white font-semibold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out transform hover:scale-105">Book a Table</a>
        </div>
    </section>

</body>
</html>