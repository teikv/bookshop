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
        <div class="flex items-center space-x-4" x-data="{ open: false }">
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


            <div>
                @auth
                    <b id="user-name" class="cursor-pointer text-blue-500 hover:underline">{{ auth()->user()->name }}</b>
                    <!-- Modal -->
                    <div id="user-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                        <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg w-1/3">
                            <p class="mb-4 text-gray-700 dark:text-gray-300">
                                <b>{{ auth()->user()->name }}</b>
                            </p>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                            <button id="close-modal" class="mt-4 bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded w-full">
                                {{ __('Close') }}
                            </button>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
                @endauth
            </div>


            <button @click="open = true" class="text-gray-700 hover:text-green-400 h-14 w-14 text-3xl">
                <i class="fa-solid fa-circle-user text-gray-700"></i>
            </button>
            
        </div>
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
