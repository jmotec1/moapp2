<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //public function index()
    //{
    //    return view('home');
    //}

    public function index()
    {
        $products = product::all();
        return view('home', [
            'products' => $products
        ]);
    }
}

