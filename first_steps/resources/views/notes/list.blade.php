@extends('layout')
@section('content')
<h2>Notes</h2>
<p>
    <a href="{{url('notes/create')}}">Add a note</a>
</p>
<ul class="list-group">
    @foreach($notes as $note)
        <li class="list-group-item">
            @if($note->category)
                <span class="label label-info">{{ $note->category->name }}</span>
            @else
                <span class="label label-info">Otros</span>
            @endif
            @if(strlen($note->note) > 20)
                {{substr($note->note, 0, 20)}} (...) <a href="{{url('notes/details', ['note' => $note->id, 'slug'=>null])}}">View Note</a>
            @else
                {{$note->note}}
            @endif
        </li>
    @endforeach
</ul>
    {!! $notes->render() !!}
@endsection