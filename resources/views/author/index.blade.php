<h1>Authors index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>


    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }} </td>
            <td>{{ $author->surname }}</td>
            <td>{{ $author->username }}</td>

        </tr>
    @endforeach
</table>
