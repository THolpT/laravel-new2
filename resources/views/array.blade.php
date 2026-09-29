<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#fbfbfb] flex flex-col min-h-full font-sans antialiased">
        
        <header class="border-b border-gray-100 dark:border-[#222] py-4 px-6 lg:px-8">
            <div class="max-w-6xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold tracking-wider uppercase text-[#FF2D20]">MySite</span>
                </div>

                <nav class="flex items-center gap-6">
                    <a href="{{ route('home') }}" class="text-sm font-medium hover:text-[#FF2D20] transition-colors">Главная</a>
                    <a href="{{ route('arrays') }}" class="text-sm font-medium hover:text-[#FF2D20] transition-colors">Массивы</a>
                </nav>
            </div>
        </header>

        <main class="flex-grow max-w-6xl w-full mx-auto py-12 px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($array as $product)
                    <div class="bg-white dark:bg-[#111] border border-gray-100 dark:border-[#222] rounded-xl overflow-hidden shadow-sm flex flex-col p-4">
                        
                        <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}" class="w-full h-48 object-cover rounded-lg mb-4">
                        
                        <div class="text-lg font-semibold mb-2 flex-grow">{{ $product['title'] }}</div>
                        
                        <div class="text-xl font-bold text-[#FF2D20]">{{ number_format($product['price'], 0, '.', ' ') }} руб.</div>
                    </div>
                @endforeach
            </div>
        </main>

        <footer class="border-t border-gray-100 dark:border-[#222] py-6 px-6 lg:px-8 text-sm text-gray-500 dark:text-gray-500">
            <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    &copy; {{ date('Y') }} Все права защищены.
                </div>
                <div class="font-medium text-gray-700 dark:text-gray-400">
                    Заярцев Антон Валерьевич
                </div>
            </div>
        </footer>
    </body>
</html>
