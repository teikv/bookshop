<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book List')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- slick carousel -->
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <style>
        .sidebar {
            border-right: 1px solid #ccc;
        }

        .book-card {
            transition: transform 0.2s;
        }

        .book-card:hover {
            transform: scale(1.03);
        }
        .carousel-item {
            height: 300px; /* Chiều cao của banner */
            background-size: cover;
            background-position: center;
        }

        .carousel-caption h5 {
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
        .banner-item {
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        /* Điều chỉnh container */
        .popular-books,
        .new-books {
            display: flex;
            overflow: hidden;
        }

        /* Điều chỉnh từng card */
        .card {
            width: 300px;
            margin: 0 10px;
            border: none;
            background-color: #ffffff;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

    </style>
    @stack('styles')
</head>

<body>
    <!-- Header -->
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-decoration-none text-dark">
                <h1 class="h3 m-0">Books</h1>
            </a>

            <!-- Navigation -->
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-dark">Homepage</a></li>
                    <li class="nav-item"><a href="{{ url('/booklist') }}" class="nav-link text-dark">Book</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('/booklist') }}" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Literature</a></li>
                            <li><a class="dropdown-item" href="#">Science</a></li>
                            <li><a class="dropdown-item" href="#">Business</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link text-dark">About Us</a></li>
                </ul>
            </nav>

            <!-- Search and Cart -->
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-2" placeholder="Search...">
                <a href="#" class="btn btn-outline-secondary">
                    <i class="bi bi-cart"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <div class="mb-3">
                <!-- Social Media Links -->
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-youtube"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
            </div>
            <p class="text-muted small">
                About | Feedback | Help | Terms | Privacy | Advertise | Contact
            </p>
            <p class="text-muted small mb-0">© 2024 Books. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>