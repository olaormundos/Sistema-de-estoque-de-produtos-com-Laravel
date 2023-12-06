<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos' ,$produtos);
    }

    public function detalhes($id){

        $resposta = DB::select('select * from produtos where id= ?', [$id]);

        if(empty($resposta)){
            return 'O produto procurado não existe!';
        }else{
            return view('detalhes')->with('DadosdoProduto', $resposta[0]);
        }

    }
}
