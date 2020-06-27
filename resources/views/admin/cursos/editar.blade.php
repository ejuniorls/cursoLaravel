@extends('layout.site')

@section('title', 'Cursos')

@section('content')
<div class="container">
    <h3>Editar cursos</h3>

    <div class="row">
        <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.cursos._form')
            <input type="hidden" name="_method" value="put">

            <button class="btn deep-orange">Atualizar</button>
        </form>
    </div>
    <div class="row">
    </div>
</div>

@endsection