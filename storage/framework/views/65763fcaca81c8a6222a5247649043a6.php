<div id="search-bar" class="position-relative">
    
    <!-- Input Search -->
    <form class="d-flex" role="search" autocomplete="off">
        <input 
            wire:model.debounce.300ms="query" 
            class="form-control me-2" 
            type="search" 
            placeholder="Search books..." 
            aria-label="Search">
    </form>
    <!-- Dropdown kết quả tìm kiếm -->
    <!--[if BLOCK]><![endif]--><?php if(!empty($results)): ?>
        <div class="dropdown-menu d-block position-absolute w-100 mt-1 shadow">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" class="dropdown-item">
                    <div class="d-flex flex-column">
                        <span class="fw-bold"><?php echo e($result->title); ?></span>
                        <small class="text-muted"><?php echo e($result->description); ?></small>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!-- Thông báo không tìm thấy -->
    <!--[if BLOCK]><![endif]--><?php if($query && empty($results)): ?>
    <div class="dropdown-menu d-block position-absolute w-100 mt-1 shadow">
        <div class="dropdown-item text-center text-muted">
            No results found for "<?php echo e($query); ?>"
        </div>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\xampp\htdocs\bookshop\resources\views/livewire/search-bar.blade.php ENDPATH**/ ?>