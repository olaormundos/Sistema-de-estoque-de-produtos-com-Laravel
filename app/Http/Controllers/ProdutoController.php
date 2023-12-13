<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function detalhes($id){

        $produto = Produto::find($id);
        //$resposta = DB::select('select * from produtos where id= ?', [$id]);

        if(empty($produto)){
            return 'O produto procurado não existe!';
        }else{
            return view('produto.detalhes')->with('DadosdoProduto', $produto);
        }

    }

    public function novo(){
        return view('.produto.formulario');
    }

    public function adiciona(){
        $nome       = Request::input('nome');
        $descricao  = Request::input('descricao');
        $valor      = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::table('produtos')->insert([
            'name'       => $nome,
            'quantidade' => $quantidade, 
            'valor'      => $valor, 
            'descricao'  => $descricao
        ]);

        return redirect()->
        action('ProdutoController@lista')->
        withInput(Request::only('nome'));
    }

    public function listaJson(){
        
        $produtos = Produto::all();

        return response()->json($produtos);
    
    }
}