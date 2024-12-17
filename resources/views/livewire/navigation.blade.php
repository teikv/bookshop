<div>
    {{-- The whole world belongs to you. --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container"> 
            
            <a class="navbar-brand" href="/">BookShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('homepage')" 
                           class="nav-link {{ $activeRoute == 'homepage' ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('booklist')" 
                           class="nav-link {{ $activeRoute == 'booklist' ? 'active' : '' }}" href="/booklist">Book List</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('bookdetail')" 
                           class="nav-link {{ $activeRoute == 'bookdetail' ? 'active' : '' }}" href="/bookdetail">Book Detail</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('about')" 
                           class="nav-link {{ $activeRoute == 'about' ? 'active' : '' }}" href="/about">About Us</a>
                    </li>
                </ul>
            </div>

            @livewire('search-bar')
        </div>
    </nav>
</div>
