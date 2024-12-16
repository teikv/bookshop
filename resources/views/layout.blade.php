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
        
        /* payment start */
        .picture {
        width: 70px;
        height: auto;
        }

        .quantity {
        width: 50px;
        text-align: center;
        }
        body {
            font-family:  sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .subtotal {
            font-weight: bold;
        }

        .total {
            text-align: right;
        }
        .btn-del{
            padding: 0;
            border: none;
            background: none;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }

            .table tbody tr {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                margin-bottom: 1rem;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                overflow: hidden;
                padding: 1rem;
            }

            .table tbody td {
                display: flex;
                align-items: center;
                padding: 0.5rem;
            }

            .table tbody td.picture-cell {
                flex: 1 1 100px;
            }

            .table tbody td.info-cell {
                flex: 3;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .table tbody td.info-cell span {
                margin-bottom: 0.5rem;
            }

            .table tbody td.actions-cell {
                flex: 2;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .total {
                text-align: center;
                margin-top: 1rem;
            }
        }
/* end payment */

/* start customer */

        body {
            font-family:  sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .info, .order {
            flex: 1;
            padding: 20px;
        }

        /* Thông tin cá nhân */
        .info h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;

        }

        label {
            flex: 1;
            text-align: right;
            margin-right: 10px;
            font-weight: bold;
            color: #ff0000;
        }

        input {
            flex: 2;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Đơn hàng */
        .order h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tfoot td {
            font-weight: bold;
        }

        .btn-submit {
            display: block;
            width: 35%; /* Giảm chiều dài xuống một nửa */
            padding: 10px 0;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-left: auto; /* Căn nút sát lề phải */
            margin-right: 0;
        }


        .feedback {
            display: flex;
            flex-direction: column; /* Sắp xếp theo cột */
            gap: 10px; /* Khoảng cách giữa textarea và nút */
            max-width: 500px; /* Đặt chiều rộng tối đa */
            margin: 0 auto; /* Canh giữa container */
        }

        .feedback-textarea {
            width: 100%;
            height: 150px; /* Chiều cao của textarea */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            resize: vertical; /* Cho phép thay đổi chiều cao */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
        }

        .feedback-textarea:focus {
            outline: none;
            border-color: #4caf50; /* Đổi màu viền khi focus */
            box-shadow: 0 0 4px rgba(76, 175, 80, 0.5); /* Hiệu ứng focus */
        }

        .btn-submit-feedback {
            width: 120px; /* Chiều dài nút */
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            align-self: flex-end; /* Đẩy nút về lề phải */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
            transition: background-color 0.3s ease; /* Hiệu ứng hover mượt */
        }

        .btn-submit-feedback:hover {
            background-color: #45a049; /* Đổi màu khi hover */
        }



        /* Responsive */
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }
        }

/* end customer */
/* start success */
/* Tổng thể */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.success-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Header */
.success-header {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.success-icon {
    width: 50px;
    margin-bottom: 10px;
}

.success-header h2 {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.success-header p {
    font-size: 16px;
    color: #666;
}

/* Nút */
.button-group {
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin: 0 10px;
    transition: background-color 0.3s ease;
}

.btn-home {
    background-color: #4caf50;
    color: #fff;
}

.btn-home:hover {
    background-color: #45a049;
}

.btn-track {
    background-color: #4caf50;
    color: #fff;
}

.btn-track:hover {
    background-color: #45a049;
}

/* Sản phẩm */
.product-section h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.product-card {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.product-image {
    width: 100%;
    height: 150px;
    background-color: #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
}

.product-card h4 {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
}

.product-card p {
    font-size: 14px;
    color: #666;
}

/* Phân trang */
.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.page {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    background-color: #fff;
}

.page:hover {
    background-color: #4caf50;
    color: #fff;
}
.success-icon {
    width: 150px;
    height: 150px;
    margin-bottom: 10px;
}

.success-icon .icon {
    width: 100%;
    height: 100%;
}
.success-icon-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
}

/* CSS gốc giữ nguyên, thêm media queries để responsive */

/* Đảm bảo phần chính không bị quá rộng trên màn hình nhỏ */
.success-container {
    padding: 20px;
    max-width: 100%;
    box-sizing: border-box;
}

/* Responsive cho màn hình nhỏ (dưới 768px) */
@media (max-width: 768px) {
    .success-header h2 {
        font-size: 20px;
    }

    .success-header p {
        font-size: 14px;
    }

    .button-group {
        display: flex; /* Sử dụng flexbox để căn chỉnh */
        flex-direction: column; /* Đặt các phần tử thành cột */
        align-items: center; /* Căn giữa các nút theo chiều ngang */
    }
    .button-group button {
        display: block;
        width: 30%;
        margin: 10px 0;
    }

    .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* Giảm kích thước cột */
        gap: 15px; /* Giảm khoảng cách */
    }

    .product-card {
        padding: 10px;
    }

    .product-card h4 {
        font-size: 14px;
    }

    .product-card p {
        font-size: 12px;
    }

    .pagination .page {
        padding: 6px 10px;
        font-size: 14px;
    }
}

/* Responsive cho màn hình rất nhỏ (dưới 480px) */
@media (max-width: 480px) {
    .success-icon {
        width: 100px;
        height: 100px;
    }

    .success-header h2 {
        font-size: 18px;
    }

    .success-header p {
        font-size: 12px;
    }

    .product-grid {
        grid-template-columns: 1fr; /* Một cột trên màn hình nhỏ */
    }

    .pagination {
        flex-direction: column;
        gap: 5px;
    }

    .pagination .page {
        width: 100%;
        text-align: center;
    }
}

/* end success */

        
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
    <header>
        <nav
            class="bg-white flex flex-row justify-between items-center px-6 py-3 fixed top-0 left-0 right-0 z-50 shadow-md">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}"  class="text-3xl font-bold">
                    <img src="{{ asset('resource/logo2.jpg') }}" alt="Logo" class="h-14 w-14">
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ url('/') }}"  class="text-gray-700 hover:text-green-500 transition-all duration-300">Home</a>
                <a href="{{ url('/booklist') }}" class="text-gray-700 hover:text-green-500 transition-all duration-300">Books</a>
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
                <a href="{{ url('/about') }}" class="text-gray-700 hover:text-green-500 transition-all">About Us</a>
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
            <a href="{{ url('/') }}"  class="block px-4 py-2 text-gray-700 hover:text-green-500">Home</a>
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
    <div class="container py-40">
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