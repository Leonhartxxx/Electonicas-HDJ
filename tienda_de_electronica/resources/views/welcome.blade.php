<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tienda de Electrónica HDJ</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <header class="bg-gray-800 text-white p-6">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-bold">Tienda Electrónica</h1>
                <nav>
                    <a href="{{ route('login') }}" class="mr-6 hover:text-gray-300">Inicio</a>
                    <a href="{{ route('login') }}" class="mr-6 hover:text-gray-300">Productos</a>
                    <a href="{{ route('login') }}" class="mr-6 hover:text-gray-300">Carrito</a>
                    <a href="{{ route('login') }}" class="hover:text-gray-300">Iniciar Sesion</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto my-6">
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Producto 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/lapto.jpg') }}" alt="Producto 1" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Laptop de Alta Gama</h2>
                    <p class="mt-2 text-gray-600">Laptop con 16GB de RAM y 1TB de almacenamiento.</p>
                    <p class="mt-2 text-green-500 font-bold">$1,200.00</p>
                    <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                        Añadir al Carrito
                    </button>
                </div>

                <!-- Producto 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/auriculares.jpg') }}" alt="Producto 2" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Auriculares Inalámbricos</h2>
                    <p class="mt-2 text-gray-600">Auriculares con cancelación de ruido y hasta 20 horas de batería.</p>
                    <p class="mt-2 text-green-500 font-bold">$250.00</p>
                    <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                        Añadir al Carrito
                    </button>
                </div>

                <!-- Producto 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/telefono.jpg') }}" alt="Producto 3" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">Smartphone 5G</h2>
                    <p class="mt-2 text-gray-600">Teléfono con pantalla AMOLED y cámara de 48MP.</p>
                    <p class="mt-2 text-green-500 font-bold">$800.00</p>
                    <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                        Añadir al Carrito
                    </button>
                </div>
            </section>
        </main>

        <footer class="bg-blue-800 text-white p-6 mt-6">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Tienda Electrónica. Todos los derechos reservados.</p>
            </div>
        </footer>
    </body>
</html>
