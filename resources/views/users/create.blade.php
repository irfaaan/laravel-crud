<form action="{{ route('users.store') }}" method="POST">
    {{ csrf_field() }}
    @method('POST')
    <label >Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label >Email</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
