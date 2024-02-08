<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My restaurant')</title>
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

<main>
    @yield("content") 
</main>

<footer class="p-4 bg-red-50 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-red-900">
    
    <ul class="flex flex-wrap items-center mt-3 sm:mt-0">
        <li>
            <a href="#" class="mr-4 text-sm text-red-900 hover:underline md:mr-6 dark:text-gray-400">Home</a>
        </li>
        <li>
            <a href="#" class="mr-4 text-sm text-red-900 hover:underline md:mr-6 dark:text-gray-400">Menu</a>
        </li>
        <li>
            <a href="#" class="mr-4 text-sm text-red-900 hover:underline md:mr-6 dark:text-gray-400">About Us</a>
        </li>
        <li>
            <a href="#" class="text-sm text-red-900 hover:underline dark:text-gray-400">Contact</a>
        </li>
    </ul>

    <span class="text-sm text-red-900 sm:text-center dark:text-gray-400">© BeatThebeets 2024 <a href="https://flowbite.com" class="hover:underline" target="_blank">Undecided Beet™</a>. All Rights Reserved.
    </span>
</footer>

</body>
</html>