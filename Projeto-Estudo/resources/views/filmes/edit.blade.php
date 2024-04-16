@extends('filmes.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar filme</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('filme.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('filme.update',['filme' => $filme->id]) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $filme->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ano:</strong>
                    <input type="text" name="ano" value="{{ $filme->ano }}" class="form-control" placeholder="Ano">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sinopse:</strong>
                    <textarea class="form-control" style="height:150px" name="sinopse" placeholder="Sinopse" value="{{ $filme->sinopse }}"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Genero:</strong>
                    <input type="text" name="genero" value="{{ $filme->genero }}" class="form-control" placeholder="Genero">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary" href="{{ route('filme.index') }}">Salvar</button>
            </div>
            
        </div>
   
    </form>
@endsection