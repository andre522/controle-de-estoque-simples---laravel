@extends('layout.layout')
@section('title','Editar Produto')
@section('content')
<div class="container">
        <h1>Editar Produto - {{$produto->nome}}</h1>
        @if ($errors->any())
        <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
            {{ Form::open(['url' => "produto/$produto->id/update",'method' => 'put']) }}
            <div class="form-group">
            {{ Form::label('nome', 'Nome:')}}
            {{ Form::text('nome', $produto->nome, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('descricao', 'Descrição:') }}
            {{ Form::textarea('descricao', $produto->descricao, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('quantidade', 'Quantidade:') }}
            {{ Form::number('quantidade', $produto->quantidade, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('preco', 'Preço:') }}
            {{ Form::number('preco', $produto->preco, ['class'=>'form-control']) }}
            </div>

            <div class="form-group">
            {{ Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>



@endsection