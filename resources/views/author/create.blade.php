<form action="{{route('author.store')}}" method="POST">
    Name: <input type="text" name="author_name" placeholder="Enter author name" />
    Surname: <input type="text" name="author_surname" placeholder="Enter author surname" />
    Username: <input type="text" name="author_username" placeholder="Enter author username" />

    @csrf

    <button type="submit">Create new</button>
</form>
