<x-layout>
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
            <div class="slider-list shadow-md border rounded-xl">
                <div class="header-title">
                    Collection Book
                </div>
                <div class="photo-slider">
                    <div class="slider-content">
                        @foreach ($products as $product)
                        <div class="photo-item">
                            <div class="photo-content">
                                <img src="{{ $product->display_image_url }}" alt="{{ $product->name }}">
                                <div class="photo-description text-center">
                                    <div>{{ $product->name }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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

</x-layout>