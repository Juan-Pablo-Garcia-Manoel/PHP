@extends('filmes.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar filme</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('filme.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
<form action="{{ route('filme.store') }}" method="POST">
    @csrf
  
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ano:</strong>
                <input type="text" name="ano" class="form-control" placeholder="Ano">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopse:</strong>
                <textarea class="form-control" style="height:150px" name="sinopse" placeholder="Sinopse"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                <input type="text" name="genero" class="form-control" placeholder="Genero">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" href="{{ route('filme.index') }}">Salvar</button>
        </div>
    </div>
   
</form>
@endsection