<x-layout>
  <title>Book Details</title>
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="css/menu.css" />

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
  <style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
      appearance: textfield;
    }

    .glider-slide {
      margin-right: 5px;
    }

    .glider-next {
      margin: 2;
      padding: 2;
    }

    .glider-prev {
      margin: 2;
      padding: 2;
    }

    .glider-track {
      display: flex;
      align-items: center;
    }

    .glider {
      margin: 0;
      padding: 0;
    }

    /* Style lạng screnn max-with: 640px */
    @media screen and (max-width: 640px) {
      .glider-slide {
        margin-right: 45px;
      }
    }

    @media screen and (min-width: 641px) and (max-width: 769px) {
      .Related_Products {
        margin-left: 13%;
      }

      .glider-slide {
        margin-left: 2%;
      }
    }
  </style>

  <script>
    function changeMainImage(element) {
      const mainImage = document.getElementById("main-book-image");
      mainImage.src = element.src;
    }

    document.addEventListener("DOMContentLoaded", function() {
      const quantityInput = document.getElementById("quantity");
      const priceElement = document.getElementById("price");
      const unitPrice = 100000;

      function updatePrice() {
        const quantity = parseInt(quantityInput.value);
        priceElement.textContent = (unitPrice * quantity).toLocaleString(
          "vi-VN", {
            style: "currency",
            currency: "VND",
          }
        );
      }

      document
        .getElementById("increment")
        .addEventListener("click", function() {
          quantityInput.value = parseInt(quantityInput.value) + 1;
          updatePrice();
        });

      document
        .getElementById("decrease")
        .addEventListener("click", function() {
          if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updatePrice();
          }
        });

      quantityInput.addEventListener("input", function() {
        if (parseInt(quantityInput.value) < 1) {
          quantityInput.value = 1;
        }
        updatePrice();
      });

      const showMoreBtn = document.getElementById("show-more");
      const relatedProducts = document.querySelectorAll(".related-product");
      let visibleProducts = 10;
    });

    document.addEventListener("DOMContentLoaded", function() {
      new Glider(document.querySelector(".glider"), {
        slidesToShow: 5, // default number of slides to show
        slidesToScroll: 5,
        draggable: true,
        dots: ".dots",
        arrows: {
          prev: ".glider-prev",
          next: ".glider-next",
        },
        responsive: [{
            // screens greater than >= 1024px
            breakpoint: 1024,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 5,
            },
          },
          {
            // screens greater than >= 768px
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            // screens greater than >= 640px
            breakpoint: 640,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            // screens less than 640px
            breakpoint: 0,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            // ipxr
            breakpoint: 414,
            setting: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            // screens less than 430px
            breakpoint: 0,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    });
  </script>
  </head>

  <body class="bg-gray-100">
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const contactBtn = document.getElementById("contactBtn");
        const dropdownMenu = document.getElementById("dropdownMenu");
        const mobileContactBtn = document.getElementById("mobileContactBtn");
        const mobileDropdownMenu =
          document.getElementById("mobileDropdownMenu");
        const hamburgerBtn = document.getElementById("hamburgerBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        contactBtn.addEventListener("click", function() {
          dropdownMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
          if (
            !contactBtn.contains(event.target) &&
            !dropdownMenu.contains(event.target)
          ) {
            dropdownMenu.classList.add("hidden");
          }
        });

        mobileContactBtn.addEventListener("click", function() {
          mobileDropdownMenu.classList.toggle("hidden");
        });

        hamburgerBtn.addEventListener("click", function() {
          mobileMenu.classList.toggle("hidden");
        });
      });

      function performSearch() {
        const searchText = document.search.txt.value;
        alert("Searching for: " + searchText);
        // Thực hiện logic tìm kiếm ở đây
      }
    </script>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
      <!-- Breadcrumb -->
      <div class="container mx-auto px-4 py-4 pt-28 container-limited">
        <nav class="text-gray-600 text-xl">
          <a href="{{ route('home') }}" class="hover:underline">Home</a>
          <span class="mx-2">></span>
          <a href="{{ route('booklist') }}" class="hover:underline">Books</a>
          <span class="mx-2">></span>
          <span class="text-green-400 font-semibold">
            {{$product->name}}
          </span>
        </nav>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Book Image -->
        <div class="col-span-1">
          <div class="p-4 rounded">
            <img
              id="main-book-image"
              class="w-full h-full object-cover mb-4"
              src="{{$product->display_image_url}}"
              alt="{{$product->name}}" />
          </div>
        </div>

        <!-- Book Details -->
        <div class="col-span-2 space-y-4">
          <div class="bg-white p-4 rounded shadow">
            <h1 class="text-2xl font-bold">{{$product->name}}</h1>
            <div class="flex items-center mb-4">
              <div class="text-yellow-500">★★★★☆</div>
            </div>
            <p class="text-xl text-green-500 font-semibold">{{$product->formatted_price}}</p>
            <div class="mb-4">
              <label class="block text-gray-700">Format</label>
              <select class="border rounded w-full py-2 px-3 mt-1">
                <option>Hardcover</option>
                <option>Paperback</option>
              </select>
            </div>

            <div class="mb-4">
              <label class="block text-gray-700">Color</label>
              <select class="border rounded w-full py-2 px-3 mt-1">
                <option>Turquoise</option>
                <option>Red</option>
                <option>Black</option>
              </select>
            </div>

            <div class="flex items-center mb-4">
              <span class="text-gray-700">Availability:</span>
              <span class="ml-2 text-green-600">{{$product->stock}}</span>
            </div>

            <div
              class="container flex flex-wrap items-start justify-start gap-4 mb-4">
              <div
                class="flex flex-wrap items-center border border-gray-300 rounded-md overflow-hidden mb-4 md:w-auto">
                <button
                  class="px-4 py-2 text-xl text-gray-700 hover:bg-gray-200 focus:outline-none w-10 h-10"
                  id="decrease">
                  -
                </button>
                <input
                  id="quantity"
                  type="number"
                  value="1"
                  min="1"
                  max="99"
                  class="bg-gray-100 text-xl border-gray-300 focus:outline-none text-center"
                  style="width: 4rem; height: 2.5rem" />
                <button
                  class="px-3 py-2 text-xl text-gray-700 hover:bg-gray-200 focus:outline-none w-10 h-10"
                  id="increment">
                  +
                </button>
              </div>
              <button
                class="text-white bg-green-400 rounded-lg hover:bg-green-600 focus:outline-none px-4 py-2 h-10 mb-4 sm:w-full md:w-auto">
                Add to cart
              </button>
              <button
                class="text-white bg-green-400 rounded-lg hover:bg-green-600 focus:outline-none px-4 py-2 h-10 mb-4 sm:w-full md:w-auto">
                <a href="./cart.html">Buy now</a>

              </button>
            </div>
          </div>
          <div class="flex-auto bg-white p-5 rounded shadow">
            <h2 class="pb-2 text-xl font-bold">Description</h2>
            <p class="pl-2 pr-2 text-gray-700">
              {{$product->description}}
            </p>
          </div>

          <!-- Detail -->
          <div class="bg-white p-5 rounded-md shadow">
            <h2 class="pb-2 text-xl font-bold">Product Details</h2>
            <div class="overflow-x-auto">
              <table class="w-96">
                <tbody class="bg-white">
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Product code
                    </td>
                    <td class="pl-16">9781529110944</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Supplier
                    </td>
                    <td class="pl-16">Grantham Book Services</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Author
                    </td>
                    <td class="pl-16">Paul Kalanithi</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Publishing year
                    </td>
                    <td class="pl-16">2017</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Publisher
                    </td>
                    <td class="pl-16">Vintage</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Language
                    </td>
                    <td class="pl-16">English</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Quantity of Page
                    </td>
                    <td class="pl-16">256 pages</td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 text-gray-400 font-semibold">
                      Book Layout
                    </td>
                    <td class="pl-16">Paperback</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Related Products -->
      <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Related Products</h2>
        <div
          class="Related_Products grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-0 sm:gap-2 -ml-2 -mr-2 sm:-ml-3 sm:-mr-3">
          <!-- Rec 1 -->
          @foreach ($relatedProducts as $relatedProduct)
          <div class="glider-slide p-1">
            <a href="/detail/{{$relatedProduct->id}}" class="flex flex-col h-full">
              <div
                class="w-full rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:-translate-y-3 hover:shadow-lg">
                <div class="bg-white w-full">
                  <img
                    src="{{$relatedProduct->display_image_url}}"
                    alt="Book 1"
                    class="w-48 h-52 object-cover m-auto" />
                </div>
                <div class="p-2 bg-white">
                  <h3 class="text-lg text-center font-semibold">
                    {{$relatedProduct->name}}
                  </h3>
                  <p class="text-green-500 font-semibold text-center">
                    {{$relatedProduct->formatted_price}}
                  </p>
                  <button
                    class="mt-2 text-xs text-white bg-green-400 rounded-lg hover:bg-green-600 border border-green-300 focus:outline-none px-2 py-1 w-full">
                    Add to cart
                  </button>
                </div>
              </div>
            </a>
          </div>
          @endforeach

    </main>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>

</x-layout>