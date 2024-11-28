@extends('layout')

@section('title', 'Homepage')

@section('content')
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>

<div class="container">
    <h1>Featured Books</h1>
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-3">
            <div class="card">
                <img src="/images/{{ $book->image }}" class="card-img-top" alt="{{ $book->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ number_format($book->price) }} VND</p>
                    <a href="{{ route('bookdetail', $book->slug) }}" class="btn btn-primary">View Details</a>
                </div>
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