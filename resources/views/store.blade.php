<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
</head>
<body>
<h1>Add new Book</h1>
<form action="{{ route('book.store') }}" method="post">
@csrf
    <input type="text" name="book_name" Placeholder="Book Name" /> <br>
    <input type="text" name="author_name" Placeholder="Author Name" /> <br>
    <input type="date" name="publish_date" /> <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
