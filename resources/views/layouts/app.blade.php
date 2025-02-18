<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
@include('layouts.navigation')

<main class="container mx-auto py-10 flex-1">
    @yield('content')
</main>
<footer class="bg-gray-800 text-white text-center py-4">
    <p>&copy; {{ date('Y') }} AirBooking. All right reserved.</p>
</footer>

</body>
</html>
