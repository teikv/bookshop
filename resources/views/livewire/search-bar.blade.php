<div id="search-bar" class="position-relative">
    <!-- Input Search -->
    <form class="d-flex" role="search">
        <input 
            wire:model="query" 
            class="form-control me-2" 
            type="search" 
            placeholder="Search..." 
            aria-label="Search">
    </form>

    <!-- Dropdown kết quả tìm kiếm -->
    @if(!empty($results))
        <div class="dropdown-menu d-block py-0">
            @foreach($results as $result)
                <div class="px-3 py-1 border-bottom">
                    <div class="d-flex flex-column ml-3">
                        <span>{{ $result->Title ?? $result->Name }}</span>
                        <small>{{ $result->Description ?? $result->Email }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
