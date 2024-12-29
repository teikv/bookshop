<x-layout>
    <title>Echobinary Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/menu.css">
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }


        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
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

            function performSearch() {
                const searchText = document.search.txt.value;
                alert('Searching for: ' + searchText);
                // Thực hiện logic tìm kiếm ở đây
            }
        </script>



        <!-- Main Content Section -->
        <main>
            <section class="bg-cover bg-center h-64" style="background-image: url('/resource/AboutUs2.webp');">
                <div class="container mx-auto h-full flex items-center justify-center max-w-screen-xl mt-20">
                    <div class="text-center text-white px-4 md:px-8 lg:px-16">
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">About EchoLibrary</h1>
                        <p class="text-lg md:text-xl leading-relaxed">EchoLibrary is a modern digital library offering thousands of documents, books, articles, and other academic resources for all ages and fields of study. We are committed to providing high-quality knowledge and information, helping readers expand their understanding and develop personal skills.</p>
                    </div>
                </div>
            </section>


            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 py-4 pt-28 container-limited">
                <nav class="text-gray-600 text-xl">
                    <a href="{{ route('home') }}" class="hover:underline">Home</a>
                    <span class="mx-2">></span>
                    <span class="text-green-400 font-semibold">
                        AboutUs
                    </span>
                </nav>
            </div>


            <!-- Introduction Section -->
            <section class="container mx-auto px-4 py-12 max-w-screen-xl">
                <div class="text-center mb-8 fade-in">
                    <h2 class="text-3xl font-bold text-gray-800">Brief Introduction</h2>
                    <p class="text-gray-600">Our mission is to help Vietnamese readers reach the world.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center fade-in">
                        <img srcset="resource/AboutUs1.jpg" loading="lazy" alt="Image 1"
                            class="w-full max-w-md h-auto object-cover rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105 mb-4">
                        <p class="text-gray-600 text-center">Echolibrary offers thousands of books across diverse genres,
                            helping Vietnamese readers access the vast treasure of global knowledge. Whether you are interested
                            in fiction, non-fiction, or educational resources, Echolibrary has something for everyone. Our
                            extensive collection ensures that readers can find the latest bestsellers as well as timeless
                            classics.</p>
                    </div>
                    <div class="flex flex-col items-center fade-in">
                        <img srcset="resource/AboutUs3.png" loading="lazy" alt="Image 3"
                            class="w-full max-w-md h-auto object-cover rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105 mb-4">
                        <p class="text-gray-600 text-center">Our platform is designed to offer a seamless and enjoyable reading
                            experience, with features that cater to all book lovers. Whether you prefer reading on your tablet,
                            smartphone, or computer, Echolibrary provides a user-friendly interface that makes reading
                            convenient and enjoyable. Additionally, our personalized recommendations ensure you always find
                            books that match your interests and preferences.</p>
                    </div>
                    <div class="flex flex-col items-center fade-in">
                        <img srcset="resource/AboutUs2.webp" loading="lazy" alt="Image 2"
                            class="w-full max-w-md h-auto object-cover rounded-lg shadow-lg transform transition-transform duration-300 hover:scale-105 mb-4">
                        <p class="text-gray-600 text-center">We constantly update the latest titles from renowned authors
                            worldwide, bringing the latest literary trends to our readers. Our platform not only focuses on
                            international bestsellers but also promotes Vietnamese authors, giving them a global stage to
                            showcase their work. This way, Echolibrary bridges the gap between local and global literary scenes.
                        </p>
                    </div>
                </div>
            </section>


            <!-- Detailed About Us Section -->
            <section class="container mx-auto px-4 py-12 max-w-screen-xl">
                <div class="space-y-8 fade-in">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">History</h2>
                        <p class="text-gray-600 mt-2">Echolibrary was founded in 2010 by a group of book and
                            technology enthusiasts with the desire to create an accessible and rich digital library platform.
                            Initially, we only had a few hundred titles, but thanks to the enthusiastic support from the
                            community and partners, Echolibrary has grown tremendously and become one of the leading digital
                            libraries today.</p>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Mission and Vision</h2>
                        <ul class="list-disc list-inside text-gray-600 mt-2">
                            <li><strong>Mission:</strong> Echolibrary's mission is to provide a vast, easily accessible
                                repository of knowledge for everyone, helping them enhance their knowledge and skills, thereby
                                contributing positively to society.</li>
                            <li><strong>Vision:</strong> Echolibrary aims to become the world's leading digital library, where
                                everyone can access and share unlimited knowledge, regardless of their location.</li>
                        </ul>
                    </div>
                </div>
            </section>


            <!-- Team Members Section -->
            <section class="container mx-auto px-4 py-12 max-w-screen-xl">
                <div class="text-center mb-8 fade-in">
                    <h2 class="text-3xl font-bold text-gray-800">Our Team</h2>
                    <p class="text-gray-600">Meet the dedicated team behind Echolibrary</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="relative overflow-hidden rounded-lg shadow-lg fade-in">
                        <img srcset="/resource/mem1.jpg" loading="lazy" alt="Team Member 1"
                            class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 text-white opacity-0 flex flex-col items-center justify-center transition-opacity duration-300 hover:opacity-100">
                            <h3 class="text-xl font-bold">Cuong Tran</h3>
                            <p>Chief Technology Officer</p>
                            <p>Cuong is a tech genius who ensures our platform runs smoothly and efficiently. His innovative
                                ideas keep us ahead of the curve.</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-lg shadow-lg fade-in">
                        <img srcset="/resource/mem2.jpg" loading="lazy" alt="Team Member 2"
                            class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 text-white opacity-0 flex flex-col items-center justify-center transition-opacity duration-300 hover:opacity-100">
                            <h3 class="text-xl font-bold">Trinh Truong</h3>
                            <p>Head of Content</p>
                            <p>Trinh curates and reviews all the materials we provide. Her keen eye for quality ensures our
                                library is filled with valuable content.</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-lg shadow-lg fade-in">
                        <img srcset="resource/mem3.webp" loading="lazy" alt="Team Member 3"
                            class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 text-white opacity-0 flex flex-col items-center justify-center transition-opacity duration-300 hover:opacity-100">
                            <h3 class="text-xl font-bold">Huy Tran</h3>
                            <p>Marketing Director</p>
                            <p>Huy's creative marketing strategies help us reach a wider audience and keep our community engaged
                                and growing.</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-lg shadow-lg fade-in">
                        <img srcset="resource/mem4.jpg" loading="lazy" alt="Team Member 4"
                            class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-70 text-white opacity-0 flex flex-col items-center justify-center transition-opacity duration-300 hover:opacity-100">
                            <h3 class="text-xl font-bold">Bao Nhi</h3>
                            <p>Customer Support Lead</p>
                            <p>Nhi ensures our users have the best experience possible, providing top-notch support and
                                addressing any concerns promptly.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                });
                document.querySelectorAll('.fade-in').forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    </body>
</x-layout>