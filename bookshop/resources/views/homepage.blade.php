<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTQ6W10FCD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-ZTQ6W10FCD');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cute+Font&display=swap" rel="stylesheet">
    <style>
        .cute-font-regular {
            font-family: "Cute Font", sans-serif;
            font-size: 80px;
            font-weight: bold;
            font-style: normal;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.2/js/bootstrap.min.js"></script>
    <header>
        <nav class="bg-white flex flex-row justify-between items-center px-11 py-3 fixed top-0 left-0 right-0 z-50">
            <div class="flex items-center space-x-4 pr-8">
                <a href="./index.html" class="text-3xl font-bold">
                    <img src="resource/logo2.jpg" alt="Logo" class="h-16 w-16">
                </a>
            </div>
            <div class="hidden text-2xl md:flex space-x-8 flex-grow items-center">
                <a href="./index.html" class="text-gray-700 hover:text-green-400 no-underline"
                    style="text-decoration: none;">Home</a>
                <a href="./new_booklist.html" class="text-gray-700 hover:text-green-400 no-underline"
                    style="text-decoration: none;">Books</a>
                <div class="relative">
                    <button id="contactBtn"
                        class="text-gray-700 hover:text-green-400 flex items-center focus:outline-none">
                        Categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="dropdownMenu"
                        class="absolute left-0 mt-4 w-full bg-white border-t border-gray-200 shadow-md hidden z-50">
                        <div class="grid grid-cols-3 gap-4 p-4">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                                style="text-decoration: none;">Văn học hiện đại</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                                style="text-decoration: none;">Văn học kinh điển</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                                style="text-decoration: none;">Văn học thiếu nhi</a>
                        </div>
                    </div>
                </div>
                <a href="#authors" id="scrollToAuthors" class="text-gray-700 hover:text-green-400 no-underline"
                    style="text-decoration: none;">Author</a>
                <a href="./aboutUs.html" class="text-gray-700 hover:text-green-400 no-underline"
                    style="text-decoration: none;">About Us</a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="box-search relative">
                    <form name="search" onsubmit="event.preventDefault(); performSearch();">
                        <input type="text" class="input-search" name="txt" placeholder="Search..."
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'"
                            class="border rounded-full py-2 px-4">
                        <button type="submit" class="absolute right-0 top-7 text-gray-500">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <button class="h-14 w-14 text-3xl">
                    <a href="cart.html" class="text-gray-700 hover:text-green-400" style="text-decoration: none;">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </button>
                <button class="text-gray-700 hover:text-green-400 h-14 w-14 text-3xl">
                    <a href="userpage.html">
                        <i class="fa-solid fa-circle-user text-gray-700"></i>
                    </a>

                </button>
            </div>
            <button id="hamburgerBtn" class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
        <div id="mobileMenu" class="hidden md:hidden flex-col space-y-2 mt-4 px-4" style="width: 100%;">
            <a href="./index.html" class="block px-4 py-2 text-gray-700 hover:text-green-400"
                style="text-decoration: none;">Home</a>
            <a href="./aboutUs.html" class="block px-4 py-2 text-gray-700 hover:text-green-400"
                style="text-decoration: none;">About Us</a>
            <div class="relative w-full">
                <button id="mobileContactBtn"
                    class="w-full text-left px-4 py-2 text-gray-700 hover:text-green-400 focus:outline-none flex items-center justify-between">
                    Categories
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="mobileDropdownMenu" class="hidden mt-4 w-full z-50" style="border: transparent;">
                    <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                        style="text-decoration: none;">Modern literature</a>
                    <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                        style="text-decoration: none;">Classic literature</a>
                    <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                        style="text-decoration: none;">Children's literature</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-scroll">
        <section class="s-one body-header">
            <header class="mx-auto px-4 pt-20 grid md:grid-cols-2 items-center">
                <div class="header__image animated delay-1">
                    <img src="./img/header.png" alt="header" class="mx-auto rounded-lg" />
                </div>
                <div class="header__content text-left relative">
                    <h2
                        class="relative inline-block mb-4 text-2xl md:text-3xl font-medium text-green-700 animated delay-2">
                        Amplify Your Story, One Book at a Time</h2>
                    <h1
                        class="text-4xl md:text-5xl lg:text-7xl font-bold text-green-700 leading-none animated delay-3">
                        ECHOLIBRARY<br />
                        <span class="text-3xl md:text-4xl lg:text-5xl text-[#38761d]">with </span>
                        <span class="text-2xl md:text-3xl lg:text-4xl font-light mt-4">our Website</span>
                    </h1>
                    <p class="mb-8 text-black text-lg md:text-2xl leading-relaxed mr-0 md:mr-8 animated delay-4">
                        Let's Make Your Digital Bookshelf a Reality
                        Welcome to Echo Library, your premier online bookstore developed by VNUK - student. As a leading
                        and reputable platform, Echo Library ensures that all books available here are fully compliant
                        with copyright laws, providing you with a secure and trustworthy shopping experience. Our
                        dedication to upholding intellectual property rights means you can browse and purchase with
                        complete confidence.
                    </p>
                    <div class="header__btn mb-8 animated delay-5">
                        <button
                            class="py-3 px-6 md:py-4 md:px-8 text-white bg-green-600 rounded-full shadow-lg border transition-colors text-lg md:text-2xl hover:text-green-400 hover:opacity-80 focus:outline-none">
                            Learn More
                        </button>
                    </div>
                    <ul class="flex items-center justify-start gap-4 md:gap-8 pb-8 animated delay-6">
                        <li><a href="#"
                                class="text-3xl md:text-5xl text-black hover:text-green-400 transition-colors"><i
                                    class="ri-facebook-circle-fill"></i></a></li>
                        <li><a href="#"
                                class="text-3xl md:text-5xl text-black hover:text-green-400 transition-colors"><i
                                    class="ri-twitter-fill"></i></a></li>
                        <li><a href="#"
                                class="text-3xl md:text-5xl text-black hover:text-green-400 transition-colors"><i
                                    class="ri-youtube-fill"></i></a></li>
                    </ul>
                </div>
            </header>
        </section>

        <section class="s-two pt-40 bg-gray-100">
            <div class="container-content bg-green-50 shadow-md border rounded-xl mt-4.5">
                <!-- Title -->
                <h1 class="text-center section-heading text-green-700 cute-font-regular">SUMMER PROMOTION </h1>
                <span class="text-center flex flex-wrap pb-3 text-3xl">The Online Bookshop of Echolibrary is excited to
                    announce a special summer promotion! For a limited time, we are offering a generous 20% discount on
                    all publications. This is the perfect opportunity to stock up on your favorite books or explore new
                    genres at a reduced price.</span>
                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel relative" data-ride="carousel"
                    data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active h-full">
                            <img class="d-block w-full h-full object-cover" src="./img/promotion_1.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item h-full">
                            <img class="d-block w-full h-full object-cover" src="./img/SALE.png" alt="Second slide">
                        </div>
                        <div class="carousel-item h-full">
                            <img class="d-block w-full h-full object-cover" src="./img/SALE_1.png" alt="Third slide">
                        </div>
                        <ol class="carousel-indicators absolute bottom-0 left-0 right-0 flex justify-center">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                class="active bg-gray-700 w-2 h-2 rounded-full mx-1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                class="bg-gray-700 w-2 h-2 rounded-full mx-1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"
                                class="bg-gray-700 w-2 h-2 rounded-full mx-1"></li>
                        </ol>
                        <a class="carousel-control-prev absolute flex items-center justify-center p-2"
                            href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <!-- <i class="fa-solid fa-chevron-left" style="font-size: 40px; color: black;"></i> -->
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next absolute flex items-center justify-center p-2 right-10"
                            href="#carouselExampleIndicators" role="button" data-slide="next">
                            <!-- <i class="fa-solid fa-chevron-right" style="font-size: 40px; color: black;"></i> -->
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-three pb-8 flex flex-col items-center bg-gray-100">
            <div class="container-content mx-auto bg-white shadow-md border rounded-xl">
                <div id="trending-container">
                    <div class="text-center">
                        <h1 class="text-center section-heading mb-4 ">Trending Books</h1>
                        <div class="swiper trending-slider relative">
                            <button class="icon-left absolute left-0 top-1/2 transform -translate-y-1/2">
                                <!-- <i class="fa-solid fa-arrow-left"></i> -->
                            </button>
                            <button class="icon-right absolute right-0 top-1/2 transform -translate-y-1/2">
                                <!-- <i class="fa-solid fa-arrow-right"></i> -->
                            </button>
                            <div class="swiper-wrapper flex">
                                <!-- Slide-start -->

                                @foreach ($products as $product)
                                    <div class="swiper-slide trending-slide flex flex-col items-center">
                                        <div class="trending-slide-img mb-4">
                                            <img src="{{ $product->display_image_url }}" alt="Book">
                                        </div>
                                        <div class="trending-slide-content text-center">
                                            <div class="trending-slide-heading mb-2">
                                                <h1 class="book-price text-lg font-bold">${{ $product->price }}</h1>
                                            </div>
                                            <div class="trending-slide-content-bottom">
                                                <h2 class="book-title text-xl font-semibold">{{ $product->name }}</h2>
                                                <h3 class="book-author text-md font-medium">{{ $product->author }}</h3>
                                                <h3 class="book-rating flex items-center justify-center">
                                                    <span class="mr-2">4.0</span>
                                                    <div class="rating flex">
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star-outline"></ion-icon>
                                                    </div>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="trending-slider-control p-3">
                                <div class="swiper-pagination "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- collection books -->
        <section class="s-four flex flex-col bg-gray-100 pb-8">
            <div class="slider-list shadow-md border rounded-xl ">
                <div class="header-title">
                    Collection Book
                </div>
                <div class="photo-slider">
                    <div class="slider-content">
                        @for ($i = 0; $i < 7; $i++)
                            <div class="photo-item">
                                <div class="photo-content">
                                    <img src="./img/book/bobaphepthuatumbalaanhsanghien.jpg" alt="">
                                    <div class="photo-description text-center ">
                                        <div>Bộ ba phép thuật úm ba la ánh sáng hiện ra</div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        <!-- authors list-->
        <section id="authors" class="s-five flex flex-col items-center bg-gray-100">
            <div class="container-content mx-auto bg-white shadow-md border rounded-xl" style="height: 60%;">
                <h3 class="text-center section-heading py-4">Famous Author</h3>
                <div class="flex justify-center items-center space-x-4 my-8">
                    <button id="prevBtn" class="text-green-400 focus:outline-none px-4">
                        <i class="fa-solid fa-chevron-left" style="font-size: 30px;"></i>
                    </button>
                    <div id="authorList"
                        class="flex justify-center items-center overflow-x-auto space-x-8 w-full px-4">
                        <!-- Author Item Start -->
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/nguyenvinhtien.webp" alt="Nguyen Vinh Tien"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Nguyễn Vĩnh Tiến</p>
                        </div>
                        <!-- Author Item End -->
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Anomyous.webp" alt="Caryl"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Lee Jin Song</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/lightman.webp" alt="lightman"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Lightman</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Richard.webp" alt="Richard"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Richard</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/perec.webp" alt="Perec" class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Perec</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/UrakamiTetsuya.webp" alt="Urakami Tetsuya"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Urakami Tetsuya</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Anomyous.webp" alt="Nhóm tư vấn Từ Mạn Mạn"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Nhóm tư vấn Từ Mạn Mạn</p>
                        </div>
                        <!-- Repeat the Author Item block for each author -->
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Caryl.webp" alt="Caryl Férey"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Caryl Férey</p>
                        </div>
                        <!-- Add more authors as needed -->
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Anomyous.webp" alt="Chí Tinh"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Chí Tinh</p>
                        </div>
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/Anomyous.webp" alt="Marnie Old"
                                class="rounded-full w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Marnie Old</p>
                        </div>
                    </div>
                    <button id="nextBtn" class="text-green-400 focus:outline-none px-4">
                        <i class="fa-solid fa-chevron-right" style="font-size: 30px;"></i>
                    </button>
                </div>
            </div>

            <footer class="bg-white text-text border-t border-accent">
                <div class=" w-full mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4">
                        <!-- Logo -->
                        <div class="flex flex-col items-center justify-center text-center md:items-center">
                            <img srcset="./resource/logo2.jpg" loading="lazy" alt="Logo" class="h-16 mb-2">
                            <p>Your gateway to a world of books. Discover, Read, and Grow with EchoLibrary.</p>
                        </div>

                        <!-- Navigation Links -->
                        <div class="mt-2 text-center">
                            <h3 class="font-semibold text-lg">Navigation</h3>
                            <ul>
                                <li><a href="/homepage.html" class="hover:underline"
                                        style="text-decoration: none; color: black;">Home</a></li>
                                <li><a href="/aboutUs.html" class="hover:underline"
                                        style="text-decoration: none; color: black;">About Us</a></li>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Services</a></li>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Customer Service -->
                        <div class="mt-2 text-center">
                            <h3 class="font-semibold text-lg">Customer Service</h3>
                            <ul>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Help
                                        Center</a></li>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Returns</a></li>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Order
                                        Status</a></li>
                                <li><a href="#" class="hover:underline"
                                        style="text-decoration: none; color: black;">Shipping Information</a></li>
                            </ul>
                        </div>

                        <!-- Contact Information -->
                        <div class="mt-2 text-center">
                            <h3 class="font-semibold text-lg">Contact Us</h3>
                            <ul>
                                <li><span>Email: </span><a href="mailto:support@echolibrary.com"
                                        class="hover:underline"
                                        style="text-decoration: none; color: black;">support@echolibrary.com</a></li>
                                <li><span>Phone: </span><a href="tel:1234567890" class="hover:underline"
                                        style="text-decoration: none; color: black;">(123) 456-7890 </a></li>
                                <li><span>Address: </span>123 Book Street, Library City, BK 12345</li>
                            </ul>
                            <div class="flex space-x-6 mt-4 justify-center">
                                <a href="https://www.facebook.com/echolibrary43/" class="hover:text-secondary">
                                    <ion-icon name="logo-facebook" class="text-2xl"></ion-icon>
                                </a>
                                <a href="https://www.twitter.com/echolibrary43/" class="hover:text-secondary">
                                    <ion-icon name="logo-twitter" class="text-2xl"></ion-icon>
                                </a>
                                <a href="https://www.instagram.com/echolibrary43/" class="hover:text-secondary">
                                    <ion-icon name="logo-instagram" class="text-2xl"></ion-icon>
                                </a>
                                <a href="https://www.linkedin.com/echolibrary43/" class="hover:text-secondary">
                                    <ion-icon name="logo-linkedin" class="text-2xl"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="border-t border-accent text-center">
                        <p>&copy; 2024 EchoLibrary. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./js/slider.2.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.animated').forEach(element => {
                observer.observe(element);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const authorList = document.getElementById('authorList');
            const authorList2 = document.getElementById('authorList2');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn2 = document.getElementById('prevBtn2');
            const nextBtn2 = document.getElementById('nextBtn2');

            const scrollAmount = 300;

            prevBtn.addEventListener('click', () => {
                authorList.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                authorList.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });

            prevBtn2.addEventListener('click', () => {
                authorList2.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });

            nextBtn2.addEventListener('click', () => {
                authorList2.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"
        integrity="sha512-UyX8JsMsNRW1cYl8BoxpcamonpwU2y7mSTsN0Z52plp7oKo1u92Xqfpv6lOlTyH3yiMXK+gU1jw0DVCsPTfKew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#carouselExampleIndicators');
            const items = carousel.querySelectorAll('.carousel-item');
            const indicators = carousel.querySelectorAll('.carousel-indicators li');
            let currentIndex = 0;
            const intervalTime = carousel.getAttribute('data-interval');
            let isSliding = false;

            function showSlide(index) {
                if (isSliding) return;
                isSliding = true;
                const currentItem = items[currentIndex];
                const nextItem = items[index];
                nextItem.classList.add(index > currentIndex ? 'carousel-item-next' : 'carousel-item-prev');
                setTimeout(() => {
                    currentItem.classList.add(index > currentIndex ? 'carousel-item-left' :
                        'carousel-item-right');
                    nextItem.classList.add('active');
                    nextItem.classList.remove('carousel-item-next', 'carousel-item-prev');
                    setTimeout(() => {
                        currentItem.classList.remove('active', 'carousel-item-left',
                            'carousel-item-right');
                        currentIndex = index;
                        indicators.forEach((indicator, i) => {
                            indicator.classList.toggle('active', i === currentIndex);
                        });
                        isSliding = false;
                    }, 500);
                }, 20);
            }

            function nextSlide() {
                let nextIndex = (currentIndex + 1) % items.length;
                showSlide(nextIndex);
            }

            function prevSlide() {
                let prevIndex = (currentIndex - 1 + items.length) % items.length;
                showSlide(prevIndex);
            }
            document.querySelector('.carousel-control-next').addEventListener('click', function(e) {
                e.preventDefault();
                nextSlide();
            });
            document.querySelector('.carousel-control-prev').addEventListener('click', function(e) {
                e.preventDefault();
                prevSlide();
            });
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function() {
                    showSlide(index);
                });
            });
            setInterval(nextSlide, intervalTime);
        });
    </script>
    <script>
        document.getElementById('scrollToAuthors').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('authors').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
