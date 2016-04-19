@extends('layout')
@section('content')
    <div class="container">
        <h1 class="page-header">
            {{$titulo}}
        </h1>
        <table class="table table-hover table-stripped">
            @include('partials.head-users')
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
    </div>
@endsection