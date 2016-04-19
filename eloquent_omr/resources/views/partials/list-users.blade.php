@foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->mail }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->biography }}</td>
        <td>
            {!! Form::open(['route'=> ['delete', $user->id], 'method'=>'delete']) !!}
            <button class="btn btn-danger" type="submit" title="Eliminar">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach