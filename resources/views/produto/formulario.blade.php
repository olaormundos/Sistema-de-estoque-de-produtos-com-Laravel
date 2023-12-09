@extends('layout.principal')
    @section('conteudo')
        <h1>Novo produto.</h1>
        <form action="/produtos/adiciona/" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="descricao" class="form-control">
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control">
            </div>

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

            <button type="submit" class="btn btn-primary btn-block">Postar</button>            
        </form>
    @endsection  