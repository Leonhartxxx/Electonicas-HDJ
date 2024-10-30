<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tienda Electrónica HDJ') }}
        </h2>
    </x-slot>

    <div class="py-0">
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
<body class="bg-gray-100 text-gray-800">

    <!-- Carousel Section -->
    <section class="bg-blue-700 text-white py-8">
        <h1 class="text-3xl font-bold text-center">Productos en Oferta</h1>
        <div class="container mx-auto mt-4 overflow-hidden">
            <div class="flex space-x-4 overflow-x-auto">
                <!-- Producto en oferta 1 -->
                <div class="min-w-[300px] bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/licuadora.webp') }}" alt="Producto en oferta 1" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-2 text-lg font-semibold">Laptop de Alta Gama</h2>
                    <p class="mt-2 text-green-500 font-bold">$1,000.00 <span class="line-through text-gray-500">$1,200.00</span></p>
                </div>
                <!-- Producto en oferta 2 -->
                <div class="min-w-[300px] bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/microon.png') }}" alt="Producto en oferta 2" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-2 text-lg font-semibold">Auriculares Inalámbricos</h2>
                    <p class="mt-2 text-green-500 font-bold">$200.00 <span class="line-through text-gray-500">$250.00</span></p>
                </div>
                <!-- Producto en oferta 3 -->
                <div class="min-w-[300px] bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/tlf.webp') }}" alt="Producto en oferta 3" class="w-full h-80 object-cover rounded-md">
                    <h2 class="mt-2 text-lg font-semibold">Smartphone 5G</h2>
                    <p class="mt-2 text-green-500 font-bold">$750.00 <span class="line-through text-gray-500">$800.00</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Search Section -->
    <section class="container mx-auto my-8">
        <h2 class="text-2xl font-bold text-center">Catálogo de Productos</h2>
        <div class="mt-4">
            <input type="text" placeholder="Buscar productos..." class="w-full p-2 border rounded-md" id="productSearch">
        </div>

        <!-- Products Grid -->
        <div id="productGrid" class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- Ejemplo de Producto -->
            <div class="bg-white p-10 rounded-lg shadow-md">
                <img src="{{ asset('images/lapto.jpg') }}" alt="Producto" class="w-full h-42 object-cover rounded-md">
                <h2 class="mt-4 text-xl font-semibold">Laptop de Alta Gama</h2>
                <p class="mt-2 text-gray-600">Laptop con 16GB de RAM y 1TB de almacenamiento.</p>
                <p class="mt-2 text-green-500 font-bold">$1,200.00</p>
                <button class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                    Añadir al Carrito
                </button>
            </div>

            <!-- Otros productos aquí... -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Tienda de Electrónica HDJ. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- JavaScript to filter products -->
    <script>
        document.getElementById('productSearch').addEventListener('input', function () {
            let searchText = this.value.toLowerCase();
            let products = document.querySelectorAll('#productGrid > div');
            products.forEach(product => {
                let productName = product.querySelector('h2').textContent.toLowerCase();
                if (productName.includes(searchText)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>

    </div>
</x-app-layout>
