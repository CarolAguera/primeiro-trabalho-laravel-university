<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return dd($produtos);
    }
}
