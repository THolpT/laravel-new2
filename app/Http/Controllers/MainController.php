<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showIndex() {
        return view('home');
    }

    function showArray() {
    $array = [ 
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '18d855f096.jpg'], 
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'asd.jpg'], 
        ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'images.jpg'], 
        ['id' => 4, 'title' => 'продукт 4', 'price' => 3500, 'path' => 'Loutre2.jpg'] 
    ]; 

    return view('array', compact('array'));
    }
}
