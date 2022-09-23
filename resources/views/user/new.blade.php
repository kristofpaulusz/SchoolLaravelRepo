<form action="/api/users" , method="post">
    {{csrf_field()}}
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value=""><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value=""><br><br>
    <input type="submit" value="Submit">
</form>