<x-layout>
    <x-slot:heading>

        <body id="hero" class="bg-gray-50 font-sans leading-normal tracking-normal">
            <!-- Hero Section: More Elegant Gradient and Softer Typography -->
            <header class="bg-gradient-to-br from-indigo-600 via-purple-500 to-pink-500 text-white">
                <div class="container mx-auto px-4 py-20 text-center">
                    <h1
                        class="text-5xl md:text-6xl font-extrabold mb-5 text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-200">
                        Tango Bookstore
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-2xl mx-auto">
                        Embark on literary journeys that transcend imagination. Discover worlds waiting to be explored.
                    </p>
                    <a href="{{ route('pages.books') }}"
                        class="inline-block bg-white text-purple-700 font-semibold px-8 py-3 rounded-full shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                        Explore Collections
                    </a>
                </div>
            </header>
    </x-slot:heading>
    <!-- Book Features: More Sophisticated Design -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Literary Landscapes</h2>
                <p class="text-xl text-gray-500 max-w-3xl mx-auto">
                    Curated genres that transport you to extraordinary realms of storytelling.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Each Feature Card with Hover Effect -->
                <div
                    class="bg-gray-100 rounded-xl p-6 text-center transition duration-300 hover:shadow-lg hover:bg-gray-50">
                    <div class="mx-auto w-24 h-24 mb-5 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Fiction</h3>
                    <p class="text-gray-600">
                        Immerse yourself in narratives that challenge, inspire, and transform your perspective.
                    </p>
                </div>

                <div
                    class="bg-gray-100 rounded-xl p-6 text-center transition duration-300 hover:shadow-lg hover:bg-gray-50">
                    <div class="mx-auto w-24 h-24 mb-5 bg-green-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Mystery</h3>
                    <p class="text-gray-600">
                        Unravel intricate plots that keep you guessing until the very last page.
                    </p>
                </div>

                <div
                    class="bg-gray-100 rounded-xl p-6 text-center transition duration-300 hover:shadow-lg hover:bg-gray-50">
                    <div class="mx-auto w-24 h-24 mb-5 bg-red-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Romance</h3>
                    <p class="text-gray-600">
                        Experience love stories that resonate with passion, depth, and emotional complexity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Books: More Elegant Presentation -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Featured Selections</h2>
            <div class="flex flex-wrap justify-center items-center space-x-8">
                <div class="relative group">
                    <img src="https://bookpress.themeperch.net/single/wp-content/uploads/sites/3/2022/05/book-image-1.png"
                        alt="Book Cover"
                        class="w-100 h-72 object-cover rounded-lg shadow-lg transform transition duration-300 group-hover:scale-105">
                </div>
                <div class="relative group">
                    <img src="https://bookpress.themeperch.net/single/wp-content/uploads/sites/3/2022/05/book-image-1.png"
                        alt="Book Cover"
                        class="w-100 h-72 object-cover rounded-lg shadow-lg transform transition duration-300 group-hover:scale-105">
                </div>
                <div class="relative group">
                    <img src="https://bookpress.themeperch.net/single/wp-content/uploads/sites/3/2022/05/book-image-1.png"
                        alt="Book Cover"
                        class="w-100 h-72 object-cover rounded-lg shadow-lg transform transition duration-300 group-hover:scale-105">
                </div>

            </div>
        </div>
    </section>

    <!-- Popular Genres Section -->
    <section id="genres" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Popular Genres</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                <button class="genre-btn bg-orange-500 text-white py-6 rounded shadow-md hover:bg-orange-600"
                    data-genre="Fiction">
                    <p class="text-lg font-bold">Fiction</p>
                </button>
                <button class="genre-btn bg-teal-500 text-white py-6 rounded shadow-md hover:bg-teal-600"
                    data-genre="Mystery">
                    <p class="text-lg font-bold">Mystery</p>
                </button>
                <button class="genre-btn bg-emerald-500 text-white py-6 rounded shadow-md hover:bg-emerald-600"
                    data-genre="Science Fiction">
                    <p class="text-lg font-bold">Science Fiction</p>
                </button>
                <button class="genre-btn bg-rose-500 text-white py-6 rounded shadow-md hover:bg-rose-600"
                    data-genre="Romance">
                    <p class="text-lg font-bold">Romance</p>
                </button>
                <button class="genre-btn bg-indigo-500 text-white py-6 rounded shadow-md hover:bg-indigo-600"
                    data-genre="Non-Fiction">
                    <p class="text-lg font-bold">Non-Fiction</p>
                </button>
                <button class="genre-btn bg-yellow-500 text-white py-6 rounded shadow-md hover:bg-yellow-600"
                    data-genre="Fantasy">
                    <p class="text-lg font-bold">Fantasy</p>
                </button>
            </div>
        </div>
    </section>

    <section id="books" class="hidden py-16 bg-gray-100">
        <div class="container mx-auto">
            <h2 id="genre-title" class="text-3xl font-bold text-gray-800 mb-8">Books</h2>
            <div id="book-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Books will be dynamically injected here -->
            </div>
        </div>
    </section>

    <!-- Newsletter: More Modern and Interactive -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white py-16">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-5">Join Our Literary Community</h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Stay connected with curated book recommendations, exclusive offers, and literary insights.
            </p>
            <form class="max-w-lg mx-auto flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <input type="email" placeholder="Enter your email address"
                    class="w-full px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-pink-500">
                <button type="submit"
                    class="bg-pink-500 text-white px-8 py-3 rounded-lg hover:bg-pink-600 transition duration-300">
                    Subscribe
                </button>
            </form>
        </div>
    </section>
    </body>
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const genreButtons = document.querySelectorAll(".genre-btn");
        const bookSection = document.getElementById("books");
        const bookList = document.getElementById("book-list");
        const genreTitle = document.getElementById("genre-title");

        genreButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const genre = this.dataset.genre;

                // Update the section title
                genreTitle.textContent = `${genre} Books`;

                // Fetch books from the server
                fetch(`/api/books?genre=${encodeURIComponent(genre)}`)
                    .then((response) => response.json())
                    .then((data) => {
                        bookList.innerHTML = ""; // Clear previous content

                        if (data.length === 0) {
                            bookList.innerHTML =
                                '<p class="text-gray-600">No books found in this genre.</p>';
                        } else {
                            data.forEach((book) => {
                                const bookCard = `
                            <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
    <h3 class="text-2xl font-semibold text-gray-900 mb-4 truncate">${book.title}</h3>
    <p class="text-gray-600 text-lg mb-2"><strong class="font-medium">Author:</strong> <span>${book.author}</span></p>
    <p class="text-gray-700 text-base mb-4 line-clamp-3">${book.description}</p>
    <div class="flex items-center justify-between">
        <button class="bg-purple-600 text-white py-2 px-4 rounded-full text-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500">
            Read More
        </button>
        <span class="text-sm text-gray-500">${book.genre}</span>
    </div>
</div>
`;
                                bookList.insertAdjacentHTML("beforeend", bookCard);
                            });
                        }

                        // Show the book section
                        bookSection.classList.remove("hidden");
                    })
                    .catch((error) => console.error("Error fetching books:", error));
            });
        });
    });
</script>
