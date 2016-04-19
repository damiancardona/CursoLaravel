@extends('layout')
@section('content')
    <div class="container">
        <h1 class="page-header">
            {{$titulo}}
        </h1>
        <table class="table table-hover table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Biography</th>
                </tr>
            </thead>
            <tbody>
            @include('partials.list-users')
            </tbody>
        </table>
    </div>
@endsection