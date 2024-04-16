@extends('filmes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informações do filme</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('filme.index') }}">Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $filme->nome }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ano:</strong>
                {{ $filme->ano }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopse:</strong>
                {{ $filme->sinopse }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                {{ $filme->genero }}
            </div>
        </div>

    </div>
    @endsection