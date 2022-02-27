
            <h2>Edit</h2>
            <a href="{{ route('users.index') }}"> Back</a>
{{--@if ($errors->any())--}}
        {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
{{--@endif--}}

<form action="{{ route('users.update',$users->id) }}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
                <strong>Title:</strong>
                <input type="text" name="name" value="{{ $users->name }}" placeholder="Title">
                <input type="email" name="email" value="{{ $users->email }}" placeholder="Title">
            <button type="submit">Submit</button>

</form>