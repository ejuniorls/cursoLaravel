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
    <div class="row">
        <ul class="pagination">
            {{ $cursos->links() }}
        </ul>

        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>

@endsection