@extends('layouts.app')


@section('title', 'Edição')

@section('content')
<div class="container mt-5">
  <h1>Editar Jogo</h1>
  <form action="{{route('jogos-update', ['id'=>$jogo->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="name" placeholder="Digite um nome" value="{{$jogo->nome}}" required>
      </div>
      <br>
      <div class="form-group">
        <label for="categoria">Categoria:</label>
        <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria" value="{{$jogo->categoria}}" required>
      </div>
      <br>
      <div class="form-group">
        <label for="ano_criacao">Ano de Criação:</label>
        <input type="number" class="form-control" name="ano_criacao" placeholder="Digite um ano" min="0" max="9999" value="{{$jogo->ano_criacao}}" required>
      </div>
      <br>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="number" class="form-control" name="preco" placeholder="Digite um preço" min="0" max="1000" value="{{$jogo->preco}}" required>
      </div>
      <br>
      <div class="form-group">
        <input type="submit"  name="submit" class="btn btn-primary" value="Atualizar">
      </div>
    </div>
  </form>
</div>
@endsection



