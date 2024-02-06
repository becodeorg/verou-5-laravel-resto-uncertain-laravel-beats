<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@%5E2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-3 rounded relative" role="alert">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif
        <h2 class="text-2xl font-semibold mb-4">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input id="username" type="text" name="username" value="employee_username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" name="password" value="employee_password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
