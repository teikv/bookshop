<x-layout>
  <title>Books</title>
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@1.0.7/dist/iconify.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="css/menu.css">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTQ6W10FCD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());


    gtag('config', 'G-ZTQ6W10FCD');
  </script>
  </head>

  <body class="bg-gray-100">

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const contactBtn = document.getElementById('contactBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const mobileContactBtn = document.getElementById('mobileContactBtn');
        const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        contactBtn.addEventListener('click', function() {
          dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
          if (!contactBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
          }
        });

        mobileContactBtn.addEventListener('click', function() {
          mobileDropdownMenu.classList.toggle('hidden');
        });

        hamburgerBtn.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
        });
      });

      function performSearch(event) {
        event.preventDefault(); // Prevent form submission

        const searchText = document.getElementById("searchInput").value.toLowerCase();
        const suggestionsBox = document.getElementById("suggestions");

        if (searchText.length === 0) {
          suggestionsBox.innerHTML = ""; // Clear suggestions if input is empty
          return;
        }

        // Fetch suggestions
        fetch(`/search?txt=${encodeURIComponent(searchText)}`, {
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            },
          })
          .then((response) => response.json())
          .then((data) => {
            // Display suggestions
            suggestionsBox.innerHTML = data
              .map(
                (product) => `
            <div class="suggestion-item" onclick="redirectToDetail(${product.id})">
              ${product.name}
            </div>`
              )
              .join("");
          })
          .catch((error) => console.error("Error fetching suggestions:", error));
      }

      // Redirect to product detail page
      function redirectToDetail(productId) {
        window.location.href = `/detail/${productId}`;
      }
    </script>

    <!-- Content -->
    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-4 pt-28 container-limited">
      <nav class="text-gray-600 text-xl">
        <a href="{{ route('home') }}" class="hover:underline">Home</a>
        <span class="mx-2">></span>
        <span class="text-green-400 font-semibold">Books</span>
      </nav>
    </div>



    <div class="container mx-auto my-8 flex flex-wrap text-xl">
      <!-- Sidebar (All Categories + Price) -->
      <aside class="w-full lg:w-1/4 p-4">
        <!-- All Categories -->
        <div class="bg-white p-4 rounded-lg shadow mb-4">
          <h2 class="font-bold mb-2">All Categories</h2>
          <ul>
            @foreach ($categories as $category)
            <li>
              <a href="{{ route('categories.filter', $category->id) }}" class="block py-1 text-black">
                {{ $category->name }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>

        <!-- Price Section -->
        <div class="bg-white p-4 rounded-lg shadow">
          <h2 class="font-bold mb-2">Price</h2>
          <ul>
            @php
            $step = 50000;
            $currentPrice = 0;
            @endphp

            @while ($currentPrice <= $maxPrice)
              <li>
              <label class="block py-1 text-gray-500">
                <input type="radio" name="price" value="{{ $currentPrice }}-{{ $currentPrice + $step }}" class="mr-2" />
                {{ number_format($currentPrice) }}đ - {{ number_format($currentPrice + $step) }}đ
              </label>
              </li>
              @php
              $currentPrice += $step;
              @endphp
              @endwhile

              <li>
                <label class="block py-1 text-gray-500">
                  <input type="radio" name="price" value="{{ $maxPrice }}-{{ $maxPrice + $step }}" class="mr-2" />
                  {{ number_format($maxPrice) }}đ - {{ number_format($maxPrice + $step) }}đ
                </label>
              </li>
          </ul>
        </div>

      </aside>

      <!-- Main Content (Filter + Products) -->
      <main class="w-full lg:w-3/4 p-4">
        <!-- Filter -->
        <div class="p-4 rounded-lg mb-4">
          <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-4">
              <div class="flex items-center">
                <span class="mr-2">Sort By:</span>
                <select
                  id="sort-by"
                  class="border rounded-md px-4 py-2 focus:ring-2 focus:border-transparent">
                  <option value="all">All</option>
                  <option value="weekly-best-seller">Weekly Best Seller</option>
                  <option value="monthly-best-seller">
                    Monthly Best Seller
                  </option>
                  <option value="yearly-best-seller">Yearly Best Seller</option>
                </select>
              </div>
              <div class="flex items-center">
                <select
                  id="product-count"
                  class="border rounded-md px-4 py-2 focus:ring-1 focus:border-transparent">
                  <option value="8">8 products</option>
                  <option value="12">12 products</option>
                  <option value="24">24 products</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Products -->
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-6">
          @foreach ($products as $product)
          <div class="bg-white rounded-xl flex flex-col h-full p-4 transform transition-transform duration-300 hover:-translate-y-3 hover:shadow-lg"
            data-price="{{$product->price}}" data-all="true" data-weekly-best-seller="false" data-monthly-best-seller="false"
            data-yearly-best-seller="false">
            <a href="/detail/{{$product->id}}" class="flex flex-col h-full">
              <div class="relative overflow-hidden rounded-xl flex-1">
                <img class="w-full h-40 object-contain" src="{{$product->display_image_url}}" alt="{{$product->name}}">
                <div class="flex flex-col items-center py-5 space-y-2">
                  <h3 class="font-semibold text-center">{{$product->name}}</h3>
                </div>
                <div class="flex flex-col items-center py-5 space-y-2">
                  <h3 class="font-semibold text-center">{{$product->category->name}}</h3>
                </div>
              </div>
              <div>
                <p class="font-medium text-center">{{$product->formatted_price}}</p>
              </div>
            </a>
          </div>
          @endforeach

        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
          <a
            href="#"
            class="py-2 px-4 bg-gray-100 hover:bg-green-300 text-black rounded-l transition duration-300 ease-in-out hover:text-white">Previous</a>
          <a
            href=""
            class="py-2 px-4 bg-green-300 hover:bg-green-300 text-black hover:text-white">1</a>
          <a
            href="./newb2.html"
            class="py-2 px-4 bg-gray-100 hover:bg-green-300 text-black hover:text-white">2</a>
          <a
            href="#"
            class="py-2 px-4 bg-gray-100 hover:bg-green-300 text-black hover:text-white">3</a>
          <a
            href="#"
            class="py-2 px-4 bg-gray-100 hover:bg-green-300 text-black rounded-r hover:text-white transition duration-300 ease-in-out">Next</a>
        </div>
      </main>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const priceFilters = document.querySelectorAll('input[name="price"]');
        const products = document.querySelectorAll("[data-price]");
        const productCountSelect = document.getElementById("product-count");
        const sortBySelect = document.getElementById("sort-by");

        let selectedPriceRange = "";
        let selectedCount = parseInt(productCountSelect.value, 10);
        let selectedSortBy = sortBySelect.value;

        priceFilters.forEach((filter) => {
          filter.addEventListener("click", function() {
            if (selectedPriceRange === this.value) {
              // Deselect the price filter if it was already selected
              this.checked = false;
              selectedPriceRange = "";
            } else {
              // Select the new price filter
              selectedPriceRange = this.value;
            }
            applyFilters();
          });
        });

        productCountSelect.addEventListener("change", function() {
          selectedCount = parseInt(this.value, 10);
          applyFilters();
        });

        sortBySelect.addEventListener("change", function() {
          selectedSortBy = this.value;
          applyFilters();
        });

        function applyFilters() {
          let visibleProducts = Array.from(products);

          // Filter by price
          if (selectedPriceRange) {
            visibleProducts = visibleProducts.filter((product) => {
              const productPrice = parseInt(
                product.getAttribute("data-price"),
                10
              );
              switch (selectedPriceRange) {
                case "0-50000":
                  return productPrice >= 0 && productPrice <= 50000;
                case "50000-100000":
                  return productPrice >= 50000 && productPrice <= 100000;
                case "100000-150000":
                  return productPrice >= 100000 && productPrice <= 150000;
                case "150000-200000":
                  return productPrice >= 150000 && productPrice <= 200000;
                case "200000-tro-len":
                  return productPrice >= 200000;
                default:
                  return true;
              }
            });
          }

          // Filter by sort
          if (selectedSortBy) {
            visibleProducts = visibleProducts.filter((product) => {
              const isAll = product.getAttribute("data-all") === "true";
              const isWeeklyBestSeller =
                product.getAttribute("data-weekly-best-seller") === "true";
              const isMonthlyBestSeller =
                product.getAttribute("data-monthly-best-seller") === "true";
              const isYearlyBestSeller =
                product.getAttribute("data-yearly-best-seller") === "true";
              switch (selectedSortBy) {
                case "all":
                  return isAll;
                case "weekly-best-seller":
                  return isWeeklyBestSeller;
                case "monthly-best-seller":
                  return isMonthlyBestSeller;
                case "yearly-best-seller":
                  return isYearlyBestSeller;
                default:
                  return true;
              }
            });
          }

          // Show only the selected number of products
          visibleProducts.forEach((product, index) => {
            if (index < selectedCount) {
              product.classList.remove("hidden");
            } else {
              product.classList.add("hidden");
            }
          });

          // Hide all other products
          products.forEach((product) => {
            if (!visibleProducts.includes(product)) {
              product.classList.add("hidden");
            }
          });
        }

        // Initialize the display with default filters
        applyFilters();
      });
    </script>
  </body>
</x-layout>