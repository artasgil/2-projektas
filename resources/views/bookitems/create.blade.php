<form action="{{route('bookitems.store')}}" method="POST">
    Title: <input type="text" name="bookitem_title" placeholder="Enter book title" />
    Book code: <input type="text" name="bookitem_code" placeholder="Enter book code" />
    Pages: <input type="text" name="bookitem_pages" placeholder="Enter book pages" />
    Description: <input type="text" name="bookitem_description" placeholder="Enter book description" />
    Author ID: <input type="text" name="bookitem_author_id" placeholder="Enter author ID" />
    @csrf

    <button type="submit">Create new</button>
</form>
