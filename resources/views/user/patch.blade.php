<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <select name="" id="">
        <option value="name">Name</option>
        <option value="email">Email</option>
    </select>
    <input type="text" name="">
</form>