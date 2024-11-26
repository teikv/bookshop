@extends('layout')

@section('title', 'Trang Chủ')

@section('content')
    <div class="container-scroll">
        <section class="s-one body-header">
            <header class="mx-auto px-4 pt-20 grid md:grid-cols-2 items-center">
                <div class="header__image animated delay-1">
                    <img src="./img/header.png" alt="header" class="mx-auto rounded-lg" />
                </div>
                <div class="header__content text-left relative">
                    <h2 class="relative inline-block mb-4 text-2xl md:text-3xl font-medium text-green-700 animated delay-2">
                        Amplify Your Story, One Book at a Time</h2>
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-green-700 leading-none animated delay-3">
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
                        <button class="py-3 px-6 md:py-4 md:px-8 text-white bg-green-600 rounded-full shadow-lg border transition-colors text-lg md:text-2xl hover:text-green-400 hover:opacity-80 focus:outline-none">
                            Learn More
                        </button>
                    </div>
                </div>
            </header>
        </section>

        <section class="s-two pt-40 bg-gray-100">
            <div class="container-content bg-green-50 shadow-md border rounded-xl mt-4.5">
                <h1 class="text-center section-heading text-green-700 cute-font-regular">SUMMER PROMOTION </h1>
                <span class="text-center flex flex-wrap pb-3 text-3xl">The Online Bookshop of Echolibrary is excited to announce a special summer promotion! For a limited time, we are offering a generous 20% discount on all publications. This is the perfect opportunity to stock up on your favorite books or explore new genres at a reduced price.</span>
                
                <div id="promotionCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/promotion_1.jpg" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/SALE.png" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/SALE_1.png" class="d-block w-100" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#promotionCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#promotionCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="s-three pb-8 flex flex-col items-center bg-gray-100">
            <div class="container-content mx-auto bg-white shadow-md border rounded-xl">
                <div id="trending-container">
                    <div class="text-center">
                        <h1 class="text-center section-heading mb-4 ">Trending Books</h1>
                        <div id="trendingCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <div class="trending-slide flex flex-col align-items-center">
                                            <div class="trending-slide-img mb-4">
                                                <img src="img/book/lichsutinhduc1khatkhaoduocbiet.jpg" alt="Book" class="img-fluid">
                                            </div>
                                            <div class="trending-slide-content text-center">
                                                <div class="trending-slide-heading mb-2">
                                                    <h1 class="book-price text-lg font-bold">$20</h1>
                                                </div>
                                                <div class="trending-slide-content-bottom">
                                                    <h2 class="book-title text-xl font-semibold">Bộ ba phép thuật: Gấu Hoggs dũng cảm</h2>
                                                    <h3 class="book-author text-md font-medium">Stefanie Dahle</h3>
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
                                    </div>
                                </div>
                                <!-- More carousel items can be added similarly -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#trendingCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#trendingCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-four flex flex-col bg-gray-100 pb-8">
            <div class="slider-list shadow-md border rounded-xl ">
                <div class="header-title">Collection Book</div>
                <div class="photo-slider">
                    <div class="slider-content">
                        <div class="photo-item">
                            <div class="photo-content">
                                <img src="./img/book/bobaphepthuatumbalaanhsanghien.jpg" alt="" class="img-fluid">
                                <div class="photo-description text-center ">
                                    <div>Bộ ba phép thuật úm ba la ánh sáng hiện ra</div>
                                </div>
                            </div>
                        </div>
                        <!-- More photo items can be added similarly -->
                    </div>
                </div>
            </div>
        </section>

        <section id="authors" class="s-five flex flex-col items-center bg-gray-100">
            <div class="container-content mx-auto bg-white shadow-md border rounded-xl" style="height: 60%;">
                <h3 class="text-center section-heading py-4">Famous Author</h3>
                <div class="flex justify-center items-center space-x-4 my-8">
                    <button id="prevBtn" class="text-green-400 focus:outline-none px-4">
                        <i class="fa-solid fa-chevron-left" style="font-size: 30px;"></i>
                    </button>
                    <div id="authorList" class="flex justify-center items-center overflow-x-auto space-x-8 w-full px-4">
                        <!-- Author Item Start -->
                        <div class="author flex-shrink-0 text-center">
                            <img src="./img/author/nguyenvinhtien.webp" alt="Nguyen Vinh Tien" class="rounded-circle w-40 h-40 mx-auto">
                            <p class="mt-4 text-lg font-medium">Nguyễn Vĩnh Tiến</p>
                        </div>
                        <!-- Author Item End -->
                        <!-- More author items can be added similarly -->
                    </div>
                    <button id="nextBtn" class="text-green-400 focus:outline-none px-4">
                        <i class="fa-solid fa-chevron-right" style="font-size: 30px;"></i>
                    </button>
                </div>
            </div>
        </section>
    </div>
@endsection