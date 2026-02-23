<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodpanda App</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-50 font-sans antialiased">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold text-green-600">Foodpanda App</h1>
            @auth
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                    Logout
                </button>
            </form>
            @endauth
        </div>
    </nav>

    <main class="min-h-screen flex items-center justify-center">
        @yield('content')
    </main>
</body>
</html>
