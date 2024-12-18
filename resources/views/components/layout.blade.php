<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tangos Bookstore' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 font-sans">
    <nav class="bg-white text-black shadow-lg">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('welcome') }}" class="text-2xl font-bold">Tango Bookstore</a>

            <!-- Mobile Menu Toggle -->
            <button id="menu-toggle" class="block lg:hidden focus:outline-none transition-all duration-300">
                <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Navigation Links -->
            <div id="menu"
                class="hidden lg:flex lg:space-x-6 items-center lg:static lg:flex-row lg:bg-transparent lg:shadow-none bg-slate-700 lg:p-0 p-4 absolute top-16 right-0 left-0 z-10 flex-col text-center transition-all duration-300 transform">
                <ul class="lg:flex lg:space-x-6 space-y-4 lg:space-y-0">
                    <li><a href="{{ route('pages.about') }}" class="hover:text-blue-600">About</a></li>
                    <li><a href="{{ route('pages.books') }}" class="hover:text-blue-600">Books</a></li>
                    <li><a href="#testimonials" class="hover:text-blue-600">Testimonials</a></li>
                    <li><a href="{{ route('pages.contact') }}" class="hover:text-blue-600">Contact</a></li>
                </ul>

                <!-- Auth and Action Buttons -->
                <div class="mt-4 lg:mt-0 lg:flex lg:space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="btn bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Dashboard</a>
                    @endauth
                    <a href="{{ route('auth.register') }}"
                        class="btn bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Register</a>
                    @auth
                        <form method="POST" action="{{ route('user.logout') }}" class="inline-block">
                            @csrf
                            <button type="submit"
                                class="btn bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('auth.login') }}"
                            class="btn bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Heading Slot -->
    {{ $heading ?? '' }}

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-10">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- The Booksellers Limited -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4"> Tango Bookstore</h4>
                <p>Corporate Headquarters:</p>
                <p>1 Olufemi, off Nathan, Surulere, Lagos, Nigeria</p>
                <p class="mt-4">234 904 643 6215, 08078496332, 07040560876</p>
                <p class="mt-4">info@booksellers.ng</p>
            </div>

            <!-- Company Information -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">Company Information</h4>
                <ul>
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                    <li><a href="#" class="hover:underline">Publishing</a></li>
                    <li><a href="#" class="hover:underline">Events & News</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">Customer Service</h4>
                <ul>
                    <li><a href="#" class="hover:underline">Help & FAQ</a></li>
                    <li><a href="#" class="hover:underline">Delivery Information</a></li>
                    <li><a href="#" class="hover:underline">Payment Information</a></li>
                    <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- My Account -->
            <div>
                <h4 class="text-white text-lg font-semibold mb-4">My Account</h4>
                <ul>
                    <li><a href="#" class="hover:underline">Login/Register</a></li>
                    <li><a href="#" class="hover:underline">My Account</a></li>
                    <li><a href="#" class="hover:underline">Order History</a></li>
                </ul>
            </div>
        </div>

        <!-- Newsletter and Social Icons -->
        <div
            class="container mx-auto mt-10 border-t border-gray-700 pt-6 flex flex-col lg:flex-row justify-between items-center">
            <div class="flex items-center space-x-4">
                <input type="email" placeholder="Email address..."
                    class="px-4 py-2 rounded-md bg-gray-800 text-gray-300 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Subscribe</button>
            </div>
            <div class="flex space-x-4 mt-4 lg:mt-0">
                <img src="https://via.placeholder.com/40" alt="Visa" class="w-10 h-6">
                <img src="https://via.placeholder.com/40" alt="MasterCard" class="w-10 h-6">
                <img src="https://via.placeholder.com/40" alt="Verve" class="w-10 h-6">
                <img src="https://via.placeholder.com/40" alt="PayStack" class="w-10 h-6">
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm text-gray-500 mt-8">
            &copy; 2017 - Tango Bookstore Limited. All rights reserved. <span class="text-white">eCommerce Website
                Design by CKDigital.</span>
        </div>
    </footer>


    <!-- JavaScript for Navbar -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.getElementById("menu-toggle");
            const menu = document.getElementById("menu");
            const hamburgerIcon = document.getElementById("hamburger-icon");
            const closeIcon = document.getElementById("close-icon");

            menuToggle.addEventListener("click", () => {
                const isMenuHidden = menu.classList.contains("hidden");

                menu.classList.toggle("hidden", !isMenuHidden);
                closeIcon.classList.toggle("hidden", !isMenuHidden);
                hamburgerIcon.classList.toggle("hidden", isMenuHidden);

                // Apply smooth opening/closing transition
                if (!isMenuHidden) {
                    menu.classList.add("opacity-0", "-translate-y-5");
                    setTimeout(() => {
                        menu.classList.remove("opacity-100", "translate-y-0");
                    }, 300);
                } else {
                    menu.classList.remove("opacity-0", "-translate-y-5");
                    menu.classList.add("opacity-100", "translate-y-0");
                }
            });
        });
    </script>

    <style>
        #menu.opacity-0 {
            opacity: 0;
        }

        #menu.opacity-100 {
            opacity: 1;
        }

        #menu.-translate-y-5 {
            transform: translateY(-50px);
        }

        #menu.translate-y-0 {
            transform: translateY(0);
        }
    </style>
</body>

</html>
