@extends('guest.layout')

@section('title')
Home
@endsection

@section('content')
<!-- header section-->
<section class="h-screen relative overflow-hidden bg-cover bg-center" style="background-image: url('{{ asset('images/bg-home-guest.png') }}');">
    <!-- Overlay with translucent white -->
    <div class="absolute inset-0 bg-white bg-opacity-50"></div>
    
    <!-- content welcome header-->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center text-gray-900">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">Beat Our Beets</h1>
        <p class="text-lg sm:text-xl md:text-2xl mb-8">Indulge in a unique culinary experience at our restaurant, <br>where every dish celebrates the vibrant and versatile beetroot in innovative and delicious ways.</p>
        <div>
            <a href="#services" class="bg-red-800 hover:bg-green-800 font-semibold py-3 px-6 rounded-full text-white text-lg transition duration-300 ease-in-out transform hover:scale-105">Show Menu</a>
            <a href="#services" class="bg-red-800 hover:bg-green-800 font-semibold py-3 px-6 rounded-full text-white text-lg transition duration-300 ease-in-out transform hover:scale-105">Book a Table</a>
        </div>
    </div>
</section>


<!--menu section-->
<section class="py-12 lg:py-24">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 lg:px-0">
       <!--image-->
        <div class="lg:w-1/2 lg:px-8 mb-8 lg:mb-0">
            <img src="{{ asset('images/beets-menu-guest.jpg') }}" alt="Beet Dishes" class="w-full h-auto rounded-lg">
        </div>
        
        <div class="lg:w-1/2 px-6 lg:px-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Discover Our Beetsy Menu</h2>
            <p class="text-lg text-gray-700 mb-6">Explore our wide range of dishes crafted with the finest beets sourced from local farmers. From salads to main courses and desserts, we have something delightful for everyone.</p>
            <p class="text-lg text-gray-700 mb-10">Our chefs blend tradition with innovation, ensuring each dish is a unique experience that tantalizes your taste buds and leaves you craving more.</p>
            <a href="#" class="bg-red-800 hover:bg-green-800 text-white font-semibold py-4 px-8 rounded-full text-lg">Explore Our Menu</a>
        </div>
    </div>
</section>

<!--booking section-->
<section class="bg-red-200 py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">Book a Table</h2>
        <p class="text-lg text-gray-700 mb-8">Ready to experience our beet-inspired dishes? Book a table now and indulge in a culinary adventure!</p>
        <a href="#" class="bg-red-800 hover:bg-green-800 text-white font-semibold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out transform hover:scale-105">Book a Table</a>
    </div>
</section>

<!--about section-->
<section class="py-12 lg:py-24">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 lg:px-0">
        <!--content menu-->
        <div class="lg:w-1/2 px-6 lg:px-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-6">About Us</h2>
            <p class="text-base lg:text-lg text-gray-700 mb-6">At Beets Restaurant, we celebrate the vibrant and versatile beetroot by crafting innovative and delicious dishes that delight the senses and nourish the soul.</p>
        <p class="text-base lg:text-lg text-gray-700 mb-6">With locally sourced ingredients and a commitment to sustainability, every dish tells a story of quality, creativity, and dedication.</p>
        <p class="text-base lg:text-lg text-gray-700 mb-6">Join us on a culinary journey where every bite is an exploration of flavor, texture, and imagination.</p>
        <p class="text-base lg:text-lg text-gray-700 mb-6">Experience the magic of beets with us!</p>
        </div>    
        <!--image-->
        <div class="lg:w-1/2 lg:px-4 mb-8 lg:mb-0">
            <img src="{{ asset('images/bg-beets-on-plate.jpg') }}" alt="Beet Dishes" class="w-full  h-auto rounded-lg">
        </div>
        
    </div>
</section>
@endsection('content')
