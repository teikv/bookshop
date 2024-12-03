@extends('layout')

@section('title', 'Book List')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<nav>
    <ol class="breadcrumb mt-600">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Book</li>
    </ol>
</nav>

<div class="row h-full">
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
        <h5>Country</h5>
        <ul class="list-unstyled">
            <li><input type="checkbox"> Vietnam</li>
            <li><input type="checkbox"> China</li>
            <li><input type="checkbox"> Japan</li>
            <li><input type="checkbox"> Korea</li>
            <li><input type="checkbox"> USA</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <label for="sort">Sort by:</label>
                <select id="sort" class="form-select d-inline-block w-auto">
                    <option>Newest</option>
                    <option>Price increase</option>
                    <option>Price decrease</option>
                </select>
            </div>
            <div>
                <label for="items">Display:</label>
                <select id="items" class="form-select d-inline-block w-auto">
                    <option>12 products</option>
                    <option>24 products</option>
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
                        <button class="btn btn-success w-100">Buy now</button>
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
</html>
@endsection
