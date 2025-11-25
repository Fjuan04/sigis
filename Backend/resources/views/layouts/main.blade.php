<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/**.js'])
    
    @yield('styles')
</head>
<body class="bg-gray-100 @yield('body-class')">
    

    @yield('header')
    

    <main class="@yield('main-class', 'flex items-center justify-center min-h-screen')">
        @yield('content')
    </main>
    

    @yield('footer')
    


</body>
</html>