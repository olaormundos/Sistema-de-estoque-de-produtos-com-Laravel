<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos' ,$produtos);
    }

    public function detalhes(){
        $id = Request::input('id', '0');

        $resposta = DB::select('select * from produtos where id= ?', [$id]);

        if(empty($resposta)){
            return 'O produto procurado não existe!';
        }else{
            return view('detalhes')->with('p', $resposta[0]);
        }

    }
}
