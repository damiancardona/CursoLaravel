@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h2>Notes<small> - Details</small></h2>
            <p>
                <a href="{{url('notes')}}">Back to List</a>
            </p>

            @if($note->category)
                <span class="label label-info">{{ $note->category->name }}</span>
            @else
                <span class="label label-info">Otros</span>
            @endif
            {{$note->note}}

        </div>
    </div>

@endsection