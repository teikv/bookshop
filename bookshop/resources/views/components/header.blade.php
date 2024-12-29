<header>
    <nav class="bg-white flex flex-row justify-between items-center px-11 py-3 fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center space-x-4 pr-8">         
            <img src="{{ asset('resource/logo2.jpg') }}" alt="Logo" class="h-16 w-16">
        </div>
        <div class="hidden text-2xl md:flex space-x-8 flex-grow items-center">
            <a href="{{ url('/')}}" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">Home</a>
            <a href="{{ url('/booklist')}}" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">Books</a>
            <a href="{{ url(path: '/about')}}" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">About Us</a>
        </div>
        <div class="flex items-center space-x-4">
            <div class="box-search relative">
                <form name="search" onsubmit="event.preventDefault(); performSearch();">
                    <input type="text" class="input-search" name="txt" placeholder="Search..."
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'"
                        class="border rounded-full py-2 px-4">
                    <button type="submit" class="absolute right-0 top-7 text-gray-500">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <button class="h-14 w-14 text-3xl">
                <a href="cart.html" class="text-gray-700 hover:text-green-400" style="text-decoration: none;">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </button>
            <button class="text-gray-700 hover:text-green-400 h-14 w-14 text-3xl">
                <a href="userpage.html">
                    <i class="fa-solid fa-circle-user text-gray-700"></i>
                </a>
            </button>
        </div>
        <button id="hamburgerBtn" class="md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>
</header>
