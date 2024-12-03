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
    <!-- Header -->
    <header>
        <nav
            class="bg-white flex flex-row justify-between items-center px-6 py-3 fixed top-0 left-0 right-0 z-50 shadow-md">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-3xl font-bold">
                    <img src="{{ asset('resource/logo2.jpg') }}" alt="Logo" class="h-14 w-14">
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-green-500 transition-all duration-300">Home</a>
                <a href="{{ url('/new_booklist') }}" class="text-gray-700 hover:text-green-500 transition-all duration-300">Books</a>
                <div class="relative group">
                    <!-- Dropdown Trigger -->
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-green-500 transition-all">
                        Categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="hidden group-hover:block absolute bg-white shadow-lg rounded-lg w-48">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Modern Literature</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Classic Literature</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Children's Literature</a>
                    </div>
                </div>
                <a href="#authors" id="scrollToAuthors" class="text-gray-700 hover:text-green-500 transition-all">Author</a>
                <a href="{{ url('/aboutUs') }}" class="text-gray-700 hover:text-green-500 transition-all">About Us</a>
            </div>
            <!-- Search & Cart -->
            <div class="flex items-center space-x-4">
                <div class="relative group">
                    <form name="search" onsubmit="event.preventDefault(); performSearch();" class="relative">
                        <input type="text" name="txt" placeholder="Search..." onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Search...'"
                            class="w-10 h-10 border-4 border-white rounded-full bg-transparent outline-none transition-all duration-500 ease-in-out group-hover:w-[250px] group-hover:bg-white group-hover:border-green-500 text-black placeholder:text-gray-500 px-5 font-comic-sans text-lg">
                        <button type="submit"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white-500 group-hover:opacity-0 group-hover:-z-10 transition-opacity duration-200 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                        </button>
                    </form>
                </div>
                <a href="{{ url('/cart') }}" class="text-gray-700 hover:text-green-500">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                </a>
                <a href="{{ url('/userpage') }}" class="text-gray-700 hover:text-green-500">
                    <i class="fa-solid fa-circle-user text-2xl"></i>
                </a>
            </div>
            <!-- Hamburger Menu -->
            <button id="hamburgerBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg mt-2">
            <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">Home</a>
            <a href="{{ url('/new_booklist') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">Books</a>
            <button id="mobileDropdownBtn"
                class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-green-500">
                Categories
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div id="mobileDropdownMenu" class="hidden pl-6">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Modern Literature</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Classic Literature</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-500">Children's Literature</a>
            </div>
            <a href="{{ url('/aboutUs') }}" class="block px-4 py-2 text-gray-700 hover:text-green-500">About Us</a>
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