<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Book Added</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .email-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        .note-details {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        .btn-custom {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .btn-custom:hover {
            background-color: #218838;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2 class="text-center">🎉 Hurray! A New Book Has Been Added! 🎊</h2>
        <p>We are excited to inform you that a new book has been added to your collection. Below are the details of the newly created book:</p>

        <div class="note-details">
            <h4>Book Details:</h4>
            <table class="table table-bordered mt-3">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Field</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Title</strong></td>
                        <td>{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <td><strong>Author</strong></td>
                        <td>{{ Str::limit($book->author, 100) }}</td>
                    </tr>
                    <tr>
                        <td><strong>Genre</strong></td>
                        <td>{{ Str::limit($book->genre, 100) }}</td>
                    </tr>

                </tbody>
            </table>
        </div>


        <div class="text-center">
            <a href="{{ route('books.show', $book->id) }}" class="btn-custom">View This book</a>
        </div>

        <p class="mt-4">Thank you for using our service!</p>
    </div>
</body>
</html>
