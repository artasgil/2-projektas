<h1>Bookitems index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tite</th>
        <th>Book code</th>
        <th>Pages</th>
        <th>Description</th>
        <th>Author ID</th>
    </tr>
    @foreach ($bookitems as $bookitem)
        <tr>
            <td>{{ $bookitem->id }}</td>
            <td>{{ $bookitem->title }} </td>
            <td>{{ $bookitem->book_code }}</td>
            <td>{{ $bookitem->pages }}</td>
            <td>{{ $bookitem->description }}</td>
            <td>{{ $bookitem->author_id }}</td>

        </tr>
    @endforeach
</table>
