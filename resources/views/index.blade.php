<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
<h1>{{ $tittle }}</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Book</td>
        <td>Author</td>
        <td>Publish Date</td>
        <td>Action</td>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->book_name }}</td>
        <td>{{ $book->author_name }}</td>
        <td>{{ $book->publish_date }}</td>
        <td>
            <a class="btn btn-info" href="{{route('book.edit',$book->id)}}">Edit</a>
            <form action="{{ route('book.delete',$book->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
        @endforeach
</table>
<a href="{{ route('book.create') }}">Add a book</a>

</body>
</html>
