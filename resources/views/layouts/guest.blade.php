<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <main class="w-full max-w-md p-6 bg-white shadow-md rounded">
        {{ $slot }}
    </main>
    
    @livewireScripts
</body>
</html>
