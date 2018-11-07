@extends('layout.layout')
@section('title','Criar Produto')
@section('content')

        <div class="container">
        <h1>Criar Produto</h1>
        @if ($errors->any())
        <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif
            {{ Form::open(['action' => 'ProdutoController@store']) }}
            <div class="form-group">
            {{ Form::label('nome', 'Nome:')}}
            {{ Form::text('nome', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('descricao', 'Descrição:') }}
            {{ Form::textarea('descricao', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('quantidade', 'Quantidade:') }}
            {{ Form::number('quantidade', null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::label('preco', 'Preço:') }}
            {{ Form::number('preco', null, ['class'=>'form-control']) }}
            </div>

            <div class="form-group">
            {{ Form::submit('Criar Produto', ['class'=>'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>

@endsection