<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="bg-red-50 w-full flex justify-between items-center px-20 py-4 ">
  <div class="flex items-center ">
    <img class="h-8 w-auto pr-6" src="{{ asset('images/beets.png') }}" alt="Beets Restaurant">
    <div class="hidden sm:block">
      <div class="flex space-x-4">
        <a href="#" class="text-gray-900 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
        <a href="#" class="text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded-md px-3 py-2 text-sm font-medium">Menu</a>
        <a href="#" class="text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded-md px-3 py-2 text-sm font-medium">About Us</a>
        <a href="#" class="text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded-md px-3 py-2 text-sm font-medium">Contact</a>
      </div>
    </div>
  </div>
  <!-- Booking Button -->
  <div>
    <a href="#" class="bg-red-800 text-white rounded-md px-4 py-2 text-sm font-medium">Book a Table</a>
  </div>
</nav>










</body>
</html>