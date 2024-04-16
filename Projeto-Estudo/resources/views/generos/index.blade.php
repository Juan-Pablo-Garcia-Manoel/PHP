@extends('filmes.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Locadora</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('filme.index') }}"> Voltar</a>
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
            <th>Nome gênero</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($generos as $genero)
        <tr>
            <td>{{ $genero->nome }}</td>
            <td>
                <form action="{{ route('genero.destroy',$genero->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('genero.show',$genero->id) }}">Informações do gênero de filme</a>
    
                    <a class="btn btn-primary" href="{{ route('genero.edit',['genero' => $genero->id]) }}">Editar gênero de filme</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection