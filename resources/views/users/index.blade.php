@if(session()->get('success'))

        {{ session()->get('success') }}
    <br />
@endif

<a href="{{ route('users.create') }}"><button>Add Record</button></a>

<table>
<tr>


    <th>ID</th>
    <th>Name</th>

    <th>email</th>
    <th>Actions</th>


@foreach( $users as $user)
<tr>
    {{--{{ dd($users->toArray()) }}--}}

    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td><form action="{{ route('users.destroy',$user->id) }}" method="POST">
            <a href="{{ route('users.edit',$user->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" >Delete</button>
        </form></td>
</tr>
    @endforeach

</table>