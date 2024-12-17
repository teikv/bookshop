<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Book List')</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Slick Carousel -->
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    @stack('styles')
    @livewireStyles
   
</head>

<body>


    <!-- Header -->
    <header class="bg-light py-3">
        

            <livewire:navigation /> 
            
            {{-- <!-- Search and Cart -->
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-2" placeholder="Search...">
                <a href="#" class="btn btn-outline-secondary">
                    <i class="bi bi-cart"></i>
                </a>
            </div> --}}
        </div>
    </header>

    <!-- Content -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <div class="mb-3">
                <!-- Social Media Links -->
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-youtube"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
            </div>
            <p class="text-muted small">
                About | Feedback | Help | Terms | Privacy | Advertise | Contact
            </p>
            <p class="text-muted small mb-0">© 2024 Books. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>