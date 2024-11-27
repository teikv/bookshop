@extends('layout')

@section('title', 'Book Detail')

@section('content')
  <!-- Breadcrumb -->
  <div class="container my-3">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/homepage') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/booklist') }}">Sách</a></li>
        <li class="breadcrumb-item active">Thông tin chi tiết</li>
      </ol>
    </nav>
  </div>

  <!-- Book Details -->
  <div class="container">
    <div class="row">
      <!-- Image -->
      <div class="col-lg-5 col-md-6">
        <div class="border p-3">
          <div class="bg-light d-flex align-items-center justify-content-center product-image">
            <span class="text-muted">Hình ảnh</span>
          </div>
        </div>
      </div>

      <!-- Details -->
      <div class="col-lg-7 col-md-6">
        <h2 class="product-title">Atomic Habits - Thay Đổi Tí Hon Hiệu Quả Bất Ngờ (Tái Bản 2023)</h2>
        <p class="price">100.000 đ</p>
        <div class="d-flex align-items-center mb-3">
          <label for="quantity" class="me-3">Số lượng:</label>
          <div class="input-group" style="width: 150px;">
            <button class="btn btn-outline-secondary" type="button">-</button>
            <input type="text" id="quantity" class="form-control text-center" value="3">
            <button class="btn btn-outline-secondary" type="button">+</button>
          </div>
        </div>
        <p class="text-muted">Còn lại 50 trong kho</p>
        <div class="d-flex">
          <button class="btn btn-outline-secondary me-3">Thêm vào giỏ hàng</button>
          <button class="btn btn-primary" onclick="window.location.href='{{ url('/payment') }}'">Mua ngay</button>
        </div>
      </div>
    </div>

    <!-- Book Description and Details -->
    <div class="row details-section">
      <div class="col-md-6">
        <h4 class="product-details-title">Giới thiệu sách</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-6">
        <h4 class="product-details-title">Thông tin chi tiết</h4>
        <ul class="list-unstyled">
          <li><strong>Tác giả:</strong> Trần Công Quốc Huy</li>
          <li><strong>Ngày xuất bản:</strong> 30/5/2000</li>
          <li><strong>Thể loại:</strong> Hành động, tình cảm</li>
          <li><strong>Ngôn ngữ:</strong> Tiếng Việt</li>
          <li><strong>Số trang:</strong> 300 trang</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Related Products -->
  <div class="container mt-5">
    <h4 class="product-details-title">Sản phẩm liên quan</h4>
    <div class="row related-products">
      <div class="col-md-3">
        <div class="card">
          <div class="bg-light d-flex align-items-center justify-content-center" style="height: 150px;">
            <span class="text-muted">Hình ảnh</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Book Title</h5>
            <p class="card-text">50.000 đ</p>
            <button class="btn btn-outline-secondary w-100">Thêm vào giỏ hàng</button>
          </div>
        </div>
      </div>
      <!-- More cards can go here -->
    </div>
  </div>
@endsection
