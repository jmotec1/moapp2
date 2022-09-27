<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
    //    return view('admin.products');
        $products = product::all();
        return view('admin.products', compact('products'));
    }

    //  mostrar pagina de editar formulario
    public function edit()
    {
        return view('admin.product_edit');
    }

    //  Receber requisição para dar update PUT
    public function update()
    {

    }

    //  mostrar pagina de criar
    public function create()
    {
        return view('admin.product_create');
    }

    //  Rceeber a requisição de criar POST
    public function store()
    {

    }
}
