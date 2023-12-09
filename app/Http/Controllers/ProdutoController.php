<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista(){
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos' ,$produtos);
    }

    public function detalhes($id){

        $resposta = DB::select('select * from produtos where id= ?', [$id]);

        if(empty($resposta)){
            return 'O produto procurado não existe!';
        }else{
            return view('produto.detalhes')->with('DadosdoProduto', $resposta[0]);
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

        /*DB::insert('insert into produtos
        (name, quantidade, valor, descricao)
        values (?,?,?,?)',
        array(
            $nome,
            $quantidade,
            $valor,
            $descricao
        ));*/

        DB::table('produtos')->insert([
            'name'       => $nome,
            'quantidade' => $quantidade, 
            'valor'      => $valor, 
            'descricao'  => $descricao
        ]);

        return view('.produto.adicionado')->with('nome', $nome);
    }
}
