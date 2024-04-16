@extends('filmes.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Locadora</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('filme.create')}}"> Cadastrar Filme</a>

                <a class="btn btn-success" href="{{ route('genero.create')}}"> Cadastrar genero</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Sinopse</th>
            <th>Genero</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($filmes as $filme)
        <tr>
            <td>{{ $filme->nome }}</td>
            <td>{{ $filme->ano }}</td>
            <td>{{ $filme->sinopse }}</td>
            <td>{{ $filme->genero }}</td>
            <td>
                <form action="{{ route('filme.destroy',$filme->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('filme.show',$filme->id) }}">Informações</a>
    
                    <a class="btn btn-primary" href="{{ route('filme.edit',['filme' => $filme->id]) }}">Editar filme</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection