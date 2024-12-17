<div id="search-bar" class="position-relative">
    {{-- The best athlete wants his opponent at his best. --}}
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
    @if(!empty($results))
        <div class="dropdown-menu d-block position-absolute w-100 mt-1 shadow">
            @foreach($results as $result)
                <a href="#" class="dropdown-item">
                    <div class="d-flex flex-column">
                        <span class="fw-bold">{{ $result->title }}</span>
                        <small class="text-muted">{{ $result->description }}</small>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
    <!-- Thông báo không tìm thấy -->
    @if($query && empty($results))
    <div class="dropdown-menu d-block position-absolute w-100 mt-1 shadow">
        <div class="dropdown-item text-center text-muted">
            No results found for "{{ $query }}"
        </div>
    </div>
    @endif
</div>
