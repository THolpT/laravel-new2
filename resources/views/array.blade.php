<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="product-grid">
        @foreach ($array as $product)
            <div class="product-card">
                <img src={{ Vite::asset('resources/images/') . $product['path']}} alt="{{ $product['title'] }}" class="product-image">
                
                <div class="product-title">{{ $product['title'] }}</div>
                
                <div class="product-price">{{ number_format($product['price'], 0, '.', ' ') }} руб.</div>
            </div>
        @endforeach
    </div>
    </body>
</html>
