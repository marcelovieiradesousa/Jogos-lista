<!-- //UTILIZANDO BLADE -->
@extends('layouts.app')


@section('title', 'Listagem')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Listagem de Jogos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('jogos-create')}}" class="btn btn-success">Criar novo Jogo</a>
            </div>
        </div>
        <table class="table at-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($jogos as $jogo)
            <tr class="text-center">
            <th scope="row">{{$jogo->id}}</th>
                <td>{{$jogo->nome}}</td>
                <td>{{$jogo->categoria}}</td>
                <td>{{$jogo->ano_criacao}}</td>
                <td>{{$jogo->preco}}</td>
                <td>
                    <a href="{{route('jogos-edit', ['id'=> $jogo->id])}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    </a>
                </td>
                <td>
                    <form action="{{route('jogos-destroy', ['id'=> $jogo->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
    </div>
    @endforeach

</table>
@endsection



