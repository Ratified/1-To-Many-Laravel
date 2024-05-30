<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors and Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border-left: 5px solid #0056b3;
            border-radius: 5px;
        }
        strong {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Authors and Their Books</h1>
        @foreach($authors as $author)
            <h2>{{ $author->name }}</h2>
            <ul>
                @foreach($author->books as $book)
                    <li>
                        <strong>{{ $book->title }}</strong> - {{ $book->description }}
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
</body>
</html>
