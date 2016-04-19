@extends('layout')
@section('content')
    <div class="container">
        <p class="label label-success">
                El usuario de elimino correctamente
            <a href="{{ route('home') }}">
                Ir al Home
            </a>
        </p>
    </div>
@endsection