<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Edit Book</h1>
<form action="{{ route('book.update',$book->id) }}" method="post">
    @method('put')
    @csrf
    <input type="text" value="{{ $book->book_name }}" name="book_name"> <br>
    <input type="text" value="{{ $book->author_name }}"name="author_name"> <br>
    <input type="date" value="{{ $book->publish_date}}"name="publish_date"> <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
