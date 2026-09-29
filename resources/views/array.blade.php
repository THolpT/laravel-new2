<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] text-[#1b1b18] flex flex-col min-h-full font-sans antialiased">

    <header class="border-b border-gray-100 py-4 px-6 lg:px-8">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="text-xl font-bold tracking-wider uppercase text-[#FF2D20]">Лучший сайт лучших людей для лучших людей про лучших людей</span>
            </div>

            <nav class="flex items-center gap-6">
                <a href="{{ route('home') }}" class="text-sm font-medium hover:text-[#FF2D20] transition-colors">Главная</a>
                <a href="{{ route('arrays') }}" class="text-sm font-medium hover:text-[#FF2D20] transition-colors">Массивы</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-6xl w-full mx-auto py-12 px-6 lg:px-8]">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
            <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm flex flex-col p-4">

                <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}" class="w-full h-48 object-cover rounded-lg mb-4">

                <div class="text-lg font-semibold mb-2 flex-grow">{{ $product['title'] }}</div>

                <div class="text-xl font-bold text-[#FF2D20]">{{ number_format($product['price'], 0, '.', ' ') }} руб.</div>
            </div>
            @endforeach
        </div>

        <div class="flex flex-col sm:flex-row gap-3 p-4 bg-gray-50 rounded-lg shadow-sm mt-10">
            <a href="{{ route('array.shuffle') }}"
                class="inline-block px-5 py-2.5 font-sans text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-md text-center transition-all duration-200 ease-in-out hover:text-blue-600 hover:bg-emerald-50 hover:border-blue-500 hover:-translate-y-0.5 hover:shadow-sm active:translate-y-0 active:bg-gray-100">
                Перемешать массив
            </a>

            <a href="{{ route('array.sort') }}"
                class="inline-block px-5 py-2.5 font-sans text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-md text-center transition-all duration-200 ease-in-out hover:text-blue-600 hover:bg-emerald-50 hover:border-blue-500 hover:-translate-y-0.5 hover:shadow-sm active:translate-y-0 active:bg-gray-100">
                Сортировать массив (по цене по возрастанию)
            </a>

            <a href="{{ route('array.filter') }}"
                class="inline-block px-5 py-2.5 font-sans text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-md text-center transition-all duration-200 ease-in-out hover:text-blue-600 hover:bg-emerald-50 hover:border-blue-500 hover:-translate-y-0.5 hover:shadow-sm active:translate-y-0 active:bg-gray-100">
                Отфильтровать массив (цена > 1000)
            </a>
        </div>


    </main>

    <footer class="border-t border-gray-100 py-6 px-6 lg:px-8 text-sm text-gray-500">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <div>
                &copy; 2026 Все права защищены.
            </div>
            <div class="font-medium text-gray-700">
                Заярцев Антон Валерьевич
            </div>
        </div>
    </footer>
</body>

</html>