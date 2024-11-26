@extends('layout')

@section('title', 'Book List')

@section('content')
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/homepage') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/booklist') }}">Sách</a></li>
        <li class="breadcrumb-item active">Thông tin chi tiết</li>
    </ol>
</nav>

<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 sidebar">
        <h5>Giá</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> 0 - 150.000 VND</li>
            <li><input type="checkbox"> 150.000 - 300.000 VND</li>
            <li><input type="checkbox"> 300.000 - 500.000 VND</li>
            <li><input type="checkbox"> 500.000 - 700.000 VND</li>
            <li><input type="checkbox"> 700.000 VND trở lên</li>
        </ul>
        <h5>Quốc gia</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> Việt Nam</li>
            <li><input type="checkbox"> Trung Quốc</li>
            <li><input type="checkbox"> Nhật Bản</li>
            <li><input type="checkbox"> Hàn Quốc</li>
            <li><input type="checkbox"> Mỹ</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <label for="sort">Sắp xếp theo:</label>
                <select id="sort" class="form-select d-inline-block w-auto">
                    <option>Mới nhất</option>
                    <option>Giá tăng dần</option>
                    <option>Giá giảm dần</option>
                </select>
            </div>
            <div>
                <label for="items">Hiển thị:</label>
                <select id="items" class="form-select d-inline-block w-auto">
                    <option>12 sản phẩm</option>
                    <option>24 sản phẩm</option>
                </select>
            </div>
        </div>

        <div class="row">
            <!-- Book Card -->
            <div class="col-md-3 mb-4">
                <div class="card book-card" onclick="window.location.href='{{ url('/bookdetail') }}'">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book">
                    <div class="card-body">
                        <h6 class="card-title">Book Title</h6>
                        <p class="text-success">100,000 VND</p>
                        <button class="btn btn-success w-100">Mua ngay</button>
                    </div>
                </div>
            </div>
            <!-- Repeat book cards -->
        </div>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
