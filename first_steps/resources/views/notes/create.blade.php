@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
            <h1>Create a note</h1>
            @include('partials/errors')
            <form class="form" method="POST" action="{{url('notes')}}">
                {!! csrf_field() !!}
                <div class = "row">
                    <div class="form-group">
                        <textarea name = "note" class="form-control" placeholder="Escribe tu nota aqui...">{{ old('note') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create note</button>
                </div>
            </form>
        </div>
    </div>
@endsection