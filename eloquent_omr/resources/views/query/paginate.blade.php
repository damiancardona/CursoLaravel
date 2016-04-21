@extends('layout')

@section('content')
    <div class="container">
        <h1>
            Paginate Table
        </h1>
        <p>
            {{ $users->total() }} Registros |
            Pagina {{ $users->currentPage() }} de {{$users->lastPage()}}
        </p>
        <table class="table table-hover table-stripped">
            @include('partials.head-users')
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@endsection