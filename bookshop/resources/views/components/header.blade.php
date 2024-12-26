<header>
    <nav class="bg-white flex flex-row justify-between items-center px-11 py-3 fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center space-x-4 pr-8">
            <a href="./index.html" class="text-3xl font-bold">
                <img src="resource/logo2.jpg" alt="Logo" class="h-16 w-16">
            </a>
        </div>
        <div class="hidden text-2xl md:flex space-x-8 flex-grow items-center">
            <a href="./index.html" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">Home</a>
            <a href="./new_booklist.html" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">Books</a>
            <div class="relative">
                <button id="contactBtn"
                    class="text-gray-700 hover:text-green-400 flex items-center focus:outline-none">
                    Categories
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="dropdownMenu"
                    class="absolute left-0 mt-4 w-full bg-white border-t border-gray-200 shadow-md hidden z-50">
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                            style="text-decoration: none;">Văn học hiện đại</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                            style="text-decoration: none;">Văn học kinh điển</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:text-green-400 no-underline"
                            style="text-decoration: none;">Văn học thiếu nhi</a>
                    </div>
                </div>
            </div>
            <a href="#authors" id="scrollToAuthors" class="text-gray-700 hover:text-green-400 no-underline"
                style="text-decoration: none;">Author</a>
            <a href="./aboutUs.html" class="text-gray-700 hover:text-green-400 no-underline"
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
    <div id="mobileMenu" class="hidden md:hidden flex-col space-y-2 mt-4 px-4" style="width: 100%;">
        <a href="./index.html" class="block px-4 py-2 text-gray-700 hover:text-green-400"
            style="text-decoration: none;">Home</a>
        <a href="./aboutUs.html" class="block px-4 py-2 text-gray-700 hover:text-green-400"
            style="text-decoration: none;">About Us</a>
        <div class="relative w-full">
            <button id="mobileContactBtn"
                class="w-full text-left px-4 py-2 text-gray-700 hover:text-green-400 focus:outline-none flex items-center justify-between">
                Categories
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <div id="mobileDropdownMenu" class="hidden mt-4 w-full z-50" style="border: transparent;">
                <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                    style="text-decoration: none;">Modern literature</a>
                <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                    style="text-decoration: none;">Classic literature</a>
                <a href="#" class="block px-6 py-2 text-gray-700 hover:text-green-400"
                    style="text-decoration: none;">Children's literature</a>
            </div>
        </div>
    </div>
</header>