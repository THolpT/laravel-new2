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

        <main class="flex-grow max-w-6xl w-full mx-auto py-12 px-6 lg:px-8 flex flex-col md:flex-row items-center gap-8">

            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ Vite::asset('resources/images/Loutre2.jpg') }}" alt="Laravel Иллюстрация" class="rounded-xl shadow-md max-w-full h-auto object-cover max-h-[400px]">
            </div>

            <div class="w-full md:w-1/2 space-y-4">
                <h1 class="text-3xl font-extrabold tracking-tight lg:text-4xl">Добро пожаловать на наш сайт</h1>
                <p class="text-base text-gray-600 leading-relaxed">
                    Лорем ипсум долор сит амет, консектетур адиписцинг элит. Сэд до эиусмод темпор инсидидунт ут лаборе эт долоре магна аликуа. Ут эним ад миним вениам, квис ноструд ксерситацион улламко лаборис ниси ут аликвип экс эа коммодо консекват.
                </p>
                <p class="text-base text-gray-600 leading-relaxed">
                    Дуис ауте ируре долор ин репрехендерит ин волуптате велит эссе циллум долоре эу фугиат нулла париатур. Экцептеур синт оккаекат цупидатат нон проидент, сунт ин кулпа кви оффициа десерунт моллит аним ид эст лаборум.
                </p>
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
