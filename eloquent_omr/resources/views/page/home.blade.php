@extends('layout')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>
                Repositorio para la serie de Eloquent ORM Italo Morales |
                @italomoralesf para @StydeNtet
            </p>
        </div>
    </div>
    <div class="container">
        <h1 class="page-header">
            Ultimos usuarios registrados
        </h1>
        <table class="table table-hover table-stripped">
            @include('partials.head-users')
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
    </div>
@endsection