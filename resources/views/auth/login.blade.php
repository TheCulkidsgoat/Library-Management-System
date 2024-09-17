<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Optionally, include Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>

        <!-- Add Register Link -->
        <p class="mt-3">Don't have an account?
            <a href="{{ route('register') }}">Register here</a>.
        </p>
    </div>

</body>
</html>
