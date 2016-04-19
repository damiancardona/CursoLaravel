@foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->mail }}</td>
        <td>{{ $user->gender }}</td>
        <td>{{ $user->biography }}</td>
    </tr>
@endforeach