 <!-- Kế thừa từ layout.blade.php -->

<?php $__env->startSection('title', 'About Us'); ?> <!-- Đặt tiêu đề trang -->

<?php $__env->startSection('content'); ?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</nav>

<!-- Hero Section -->
<div class="bg-light mb-4" style="height: 300px;"></div>

<!-- Row 1 -->
<div class="row mb-4">
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <h5>Books help children understand quickly, learn faster, and develop critical thinking skills.</h5>
        <p>These books are designed to nurture children's curiosity and expand their problem-solving abilities.</p>
        <a href="#" class="btn btn-success mt-2">View More</a>
    </div>
    <div class="col-md-6">
        <div class="bg-secondary" style="height: 200px;"></div>
    </div>
</div>

<!-- Row 2 -->
<div class="row mb-4">
    <div class="col-md-6">
        <div class="bg-secondary" style="height: 200px;"></div>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <h5>Books help children understand quickly, learn faster, and develop critical thinking skills.</h5>
        <p>These books are designed to nurture children's curiosity and expand their problem-solving abilities.</p>
        <a href="#" class="btn btn-success mt-2">View More</a>
    </div>
</div>

<!-- Row 3 -->
<div class="row mb-4">
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <h5>Books help children understand quickly, learn faster, and develop critical thinking skills.</h5>
        <p>These books are designed to nurture children's curiosity and expand their problem-solving abilities.</p>
        <a href="#" class="btn btn-success mt-2">View More</a>
    </div>
    <div class="col-md-6">
        <div class="bg-secondary" style="height: 200px;"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\bookshop\resources\views/about.blade.php ENDPATH**/ ?>