<form action="/api/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <label for="name">New Name:</label>
    <input type="text" id="name" name="name" placeholder="{{$user->name}}">
    <label for="email">New Email:</label>
    <input type="text" id="email" name="email" placeholder="{{$user->email}}">
    <input type="submit" value="Jóváhagy">
</form>