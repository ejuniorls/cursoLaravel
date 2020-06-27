@extends('layout.site')

@section('title', 'Cursos')

@section('content')
<div class="container">
    <h3>Entrar no sistema</h3>

    <div class="row">
        <form action="{{ route('site.login.entrar') }}" method="post">
            {{ csrf_field() }}

            <div class="input-field">
                <input type="email" name="email">
                <label>E-mail</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha">
                <label>Senha</label>
            </div>

            <button class="btn deep-orange">Entrar</button>
        </form>
    </div>
    <div class="row">
    </div>
</div>

@endsection