@extends('layout.principal')
    @section('conteudo')
        <h1>Detalhes do produto {{ $DadosdoProduto->name }}</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td>{{ $DadosdoProduto->valor }}</td>
                <td>{{ $DadosdoProduto->descricao }}</td>
                <td>{{ $DadosdoProduto->quantidade }}</td>
            </tr>
        </table>
    @endsection    
