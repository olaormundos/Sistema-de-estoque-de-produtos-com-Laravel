<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
        return '<h1>Listagem de produtos com Laravel</h1>';
    }
}
