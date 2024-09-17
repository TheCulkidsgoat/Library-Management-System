<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Library Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .welcome-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            font-size: 2.5em;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-card">
            <h1>Welcome, {{ $user->name }}!</h1>
            <p>
                Thank you for joining our Library Management System. We're thrilled to have you on board!
                Here, you can easily browse, borrow, and manage all your library needs with just a few clicks.
            </p>
            <p>
                Feel free to explore the system, check out our extensive collection of books, and manage your account.
            </p>
            <p>
                If you need any help, don't hesitate to reach out to our support team.
            </p>
            <a href="{{ route('homepage') }}" class="btn">Get Started</a>
        </div>
    </div>
</body>
</html>
