<!DOCTYPE html>
<html lang="es">

<head>
    <title>CRUD Colegio SFA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    <nav class=" bg-orange-100 border-orange-100 dark:bg-orange-100 rounded-xl ">
        <div class="max-w-screen-xxl flex flex-wrap items-center justify-between mx-auto px-2 py-2">
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo_colegio.png') }}" class="h-24" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-orange-800">Colegio "San Francisco de Asis"</span>
            </div>
        </div>
    </nav>

    <div class="flex-grow">
        @yield('contenido')
    </div>

    <footer class="bg-orange-100 border-t border-orange-200 dark:bg-orange-100 p-4">
        <div class="max-w-screen-xxl mx-auto text-center">
            <p class="text-gray-700 dark:text-gray-400">© 2024 Colegio "San Francisco de Asis". Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.7/flowbite.min.js"></script>

</body>

</html>