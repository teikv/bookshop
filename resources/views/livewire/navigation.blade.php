<div>
    {{-- Updated and beautiful navigation bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <!-- Logo / Brand -->
            <a class="navbar-brand fw-bold text-primary" href="/">
                <img src="https://via.placeholder.com/40" alt="BookShop Logo" class="me-2"> BookShop
            </a>

            <!-- Toggler button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('homepage')" class="nav-link text-dark fw-semibold {{ $activeRoute == 'homepage' ? 'active text-primary' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('booklist')" class="nav-link text-dark fw-semibold {{ $activeRoute == 'booklist' ? 'active text-primary' : '' }}" href="/booklist">Book List</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('bookdetail')" class="nav-link text-dark fw-semibold {{ $activeRoute == 'bookdetail' ? 'active text-primary' : '' }}" href="/bookdetail">Book Detail</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click.prevent="navigateTo('about')" class="nav-link text-dark fw-semibold {{ $activeRoute == 'about' ? 'active text-primary' : '' }}" href="/about">About Us</a>
                    </li>
                </ul>
            </div>
            @livewire('search-bar')
        </div>
    </nav>
   
</div>