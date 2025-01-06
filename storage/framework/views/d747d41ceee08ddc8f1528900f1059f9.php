<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>

<!-- Carousel Banner -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php echo e($index == 0 ? 'active' : ''); ?> banner-item" style="background-image: url('<?php echo e($banner['image']); ?>');">
                <div class="carousel-caption">
                    <h5><?php echo e($banner['caption']); ?></h5>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php $__currentLoopData = $popularBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <img src="<?php echo e($book['image']); ?>" class="card-img-top" alt="<?php echo e($book['title']); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($book['title']); ?></h5>
                    <p class="card-text"><?php echo e($book['description']); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<!-- Section: Sách mới và xu hướng -->
<div class="container my-5">
    <h2 class="section-title">New Books - Trending Books</h2>
    <div class="new-books">
        <?php $__currentLoopData = $newBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <img src="<?php echo e($book['image']); ?>" class="card-img-top" alt="<?php echo e($book['title']); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($book['title']); ?></h5>
                    <p class="card-text"><?php echo e($book['description']); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookshop\resources\views/homepage.blade.php ENDPATH**/ ?>