<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@%5E2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <title>Undecided Beets</title>

        <style>
            body { background-image: url("https://images.unsplash.com/photo-1613722157509-c4b641ec3479?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");}
        </style>
    </head>
    <body class="container mx-auto px-4 py-8">
        <h1 class="mx-auto bg-purple-500 text-3xl py-2 px-4 font-bold text-white mt-8 mb-8 max-w-max">Welcome to Undecided Beets</h1>
        <div class="flex justify-center space-x-12">
            <button id="guestButton" class="bg-yellow-500 hover:bg-yellow-800 text-white font-bold h-16 w-48 rounded">Guest</button>
            <button id="employeeButton" class="bg-red-500 hover:bg-pink-700 text-white font-bold h-16 w-48 rounded">Employee</button>
        </div>

        <script>  
            document.getElementById('employeeButton').addEventListener('click', function() {
                window.location.href = "{{ route('login') }}";
            });
        </script>
    </body>
</html>
