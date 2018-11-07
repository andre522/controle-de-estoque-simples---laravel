@extends('layout.layout')
@section('title','Lista de Produtos')
@section('content')
 <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th>#id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->quantidade}}</td>
                <td><a href="produto/{{$produto->id}}/edit" class="btn btn-primary mr-2">Editar</a><a href="produto/{{$produto->id}}/destroy" class="btn btn-danger">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
