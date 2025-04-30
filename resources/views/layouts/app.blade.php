<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- si tu utilises Vite --}}
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- TOP BAR --}}
    <header class="fixed top-0 left-0 w-full h-14 bg-white shadow z-10 flex items-center justify-between px-4">
        <div class="font-bold text-lg"><a href="/">🍽️ MyFoodApp</a></div>
    </header>

    <div class="flex pt-14">

        {{-- SIDEBAR --}}
        <aside class="w-56 bg-white h-screen shadow fixed left-0 top-14 p-4 flex flex-col space-y-4">
            <a href="#" class="text-gray-700 hover:text-blue-600">🏠 Dashboard</a>
            <a href="{{ route('meals.index') }}" class="text-gray-700 hover:text-blue-600">🍔 Meals</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">📊 Analytics</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">⚙️ Settings</a>
        </aside>

        {{-- CONTENU PRINCIPAL --}}
        <main class="ml-56 p-6 w-full">
            @yield('content')
        </main>

    </div>
</body>
</html>
