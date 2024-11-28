@extends('layout')

@section('title', 'Homepage')

@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>

<!-- Carousel Banner -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banners as $index => $banner)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }} banner-item" style="background-image: url('{{ $banner['image'] }}');">
                <div class="carousel-caption">
                    <h5>{{ $banner['caption'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

 
<!-- Section: Sách bán chạy -->
<div class="container my-5">
    <h2 class="section-title">Popular Books - Favorite Books</h2>
    <div class="popular-books">
        @foreach($popularBooks as $book)
            <div class="card">
                <img src="{{ $book['image'] }}" class="card-img-top" alt="{{ $book['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book['title'] }}</h5>
                    <p class="card-text">{{ $book['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Section: Sách mới và xu hướng -->
<div class="container my-5">
    <h2 class="section-title">New Books - Trending Books</h2>
    <div class="new-books">
        @foreach($newBooks as $book)
            <div class="card">
                <img src="{{ $book['image'] }}" class="card-img-top" alt="{{ $book['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book['title'] }}</h5>
                    <p class="card-text">{{ $book['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.popular-books, .new-books').slick({
            slidesToShow: 4,    // Số lượng item hiển thị cùng lúc
            slidesToScroll: 1,  // Số lượng item cuộn mỗi lần
            infinite: true,     // Cho phép lặp vô hạn
            autoplay: true,     // Tự động cuộn
            autoplaySpeed: 3000, // Tốc độ tự động cuộn (ms)
            dots: true,          // Hiển thị các nút chấm chỉ định vị trí
            arrows: true,        // Hiển thị mũi tên điều hướng
            prevArrow: "<button type='button' class='slick-prev'>&lt;</button>",
            nextArrow: "<button type='button' class='slick-next'>&gt;</button>",
        });
    });
</script>
@endsection