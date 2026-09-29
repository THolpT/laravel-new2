<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $array = [ 
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '18d855f096.jpg'], 
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'asd.jpg'], 
        ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'images.jpg'], 
        ['id' => 4, 'title' => 'продукт 4', 'price' => 3500, 'path' => 'Loutre2.jpg'] 
    ]; 

    public function showIndex() {
        return view('home');
    }


    public function showArray()
    {
        $products = $this->array;
        return view('array', compact('products'));
    }

    public function shuffleArray()
    {
        $products = $this->array;
        shuffle($products);
        
        return view('array', compact('products'));
    }

    public function sortArray()
    {
        $products = $this->array;
        usort($products, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return view('array', compact('products'));
    }

    public function filterArray()
    {
        $products = array_filter($this->array, function ($product) {
            return $product['price'] > 1000;
        });

        return view('array', compact('products'));
    }
}
