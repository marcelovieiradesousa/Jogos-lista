@extends('layouts.app')


@section('title', 'Cadastro')

@section('content')
<div class="container mt-5">
  <h1>Crie um Jogo</h1>
  <form action="{{route('jogos-store')}}" method="POST">
    @csrf
    <div class="form-group">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite um nome" required>
      </div>
      <br>
      <div class="form-group">
        <label for="cateoria">Categoria:</label>
        <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria" required>
      </div>
      <br>
      <div class="form-group">
        <label for="ano-criacao">Ano de Criação:</label>
        <input type="number" class="form-control" name="ano-criacao" placeholder="Digite um ano" min="0" max="9999" required>
      </div>
      <br>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="number" class="form-control" name="preco" placeholder="Digite um preço" min="0" max="1000" required>
      </div>
      <br>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" name="submit">
      </div>
    </div>
  </form>
</div>
@endsection



