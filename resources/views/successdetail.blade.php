
@extends('layout')

@section('title', 'Successfully')

@section('content')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully</title>
    <link rel="stylesheet" href="styleSuccess.css">
</head>

<body>
    <div class="success-container">
        <div class="success-header">
            <div class="success-icon-container">
                <div class="success-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon">
                        <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License -->
                        <path fill="#63E6BE" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                    </svg>
                </div>
            </div>
            <h2> Your order has been successfully placed</h2>
            <p>Thank you for trusting us!</p>
        </div>
        <div class="button-group">
            <button class="btn-home">Home Page</button>
            <button class="btn-track">Order Tracking</button>
        </div>
        <div class="product-section">
            <h3> Products you have purchased:</h3>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
                <div class="product-card">
                    <div class="product-image"></div>
                    <h4>Title</h4>
                    <p>Content</p>
                </div>
            </div>
        </div>
        <div class="pagination">
            <span class="page">1</span>
            <span class="page">2</span>
            <span class="page">3</span>
            <span class="page">4</span>
            <span class="page">...</span>
        </div>
    </div>
</body>

</html>
@endsection