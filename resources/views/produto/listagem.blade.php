@extends('layout.principal')
    @section('conteudo')
        @if(empty($produtos))
            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado!
            </div>
        @else    
        <h1>Listagem de produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($produtos as $item)
            <tr class="{{ $item->quantidade <=1 ? 'danger' : '' }}">
                <td>{{ $item->name }}</td>
                <td>{{ $item->valor }}</td>
                <td>{{ $item->descricao }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>
                    <a href="/produtos/detalhes/{{ $item->id }}">
                        <span>
                            <i class="bi bi-search-heart"></i>
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach  
        </table>
        @endif
        <h4>
            <div class="label label-danger pull-right">
                Um ou mais produtos estão com o estoque acabando!
            </div>
        </h4>
        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
            </div>
        @endif
    @endsection     
