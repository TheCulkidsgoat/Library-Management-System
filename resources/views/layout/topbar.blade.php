<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ route('homepage') }}">Library</a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
                </li>

                <!-- Books link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('books.index') ? 'active' : '' }}" href="{{ route('books.index') }}">Books</a>
                </li>

                <!-- Add Book link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('books.create') ? 'active' : '' }}" href="{{ route('books.create') }}">Add Book</a>
                </li>

                <!-- Borrow Book link -->
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('borrows.create') ? 'active' : '' }}" href="{{ route('borrows.create') }}">Borrow</a>
                </li>
            </ul>

            <!-- Authentication Links -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- If the user is not logged in -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <!-- If the user is logged in, show a welcome message and Logout button -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
