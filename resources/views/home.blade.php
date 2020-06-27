@extends('layout.site')

@section('title', 'Cursos')

@section('content')
<div class="container">
    <h3>Lista de cursos</h3>

    <div class="row">
        @foreach($cursos as $curso)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset($curso->imagem) }}">
                    
                </div>
                <div class="card-content">
                    <h4><span class="card-title">{{ $curso->titulo }}</span></h4>
                    <p>{{ $curso->descricao }}</p>
                </div>
                <div class="card-action">
                    <a href="#">{{ $curso->titulo }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection