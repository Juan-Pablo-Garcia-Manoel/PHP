@extends('filmes.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Genero</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('genero.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
<form action="{{ route('genero.store') }}" method="POST">
    @csrf
  
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" href="{{ route('genero.index') }}">Salvar</button>
        </div>
    </div>
   
</form>
@endsection