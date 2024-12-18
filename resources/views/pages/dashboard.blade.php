<x-layout>
    <x-slot:heading>
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen p-8">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Header Section -->
                <div class="bg-blue-600 text-white p-6">
                    <div class="flex flex-wrap justify-between items-center">
                        <h2 class="text-3xl font-extrabold">Hello {{ $user->fullname }} 👋</h2>
                        <a href="{{ route('pages.create') }}"
                            class="bg-white text-blue-600 hover:bg-blue-50 font-semibold py-2 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                            + Add New Book
                        </a>
                    </div>
                </div>

                <!-- User's Books Section -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Your Books</h3>

                    @forelse($tangos as $book)
                        <div
                            class="mb-4 bg-gray-50 rounded-xl p-5 hover:bg-gray-100 transition duration-300 ease-in-out">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900">{{ $book->title }}</h4>
                                    <p class="text-gray-600 text-sm">
                                        <span class="font-medium">{{ $book->author }}</span>
                                        <span class="ml-2 text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">
                                            {{ $book->genre }}
                                        </span>
                                    </p>
                                </div>

                                <!-- Delete Button -->
                                <form action="{{ route('pages.destroy', $book->id) }}" method="POST" class="ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12 bg-gray-50 rounded-xl">
                            <p class="text-gray-500 text-lg">
                                <i class="fas fa-book-open text-3xl block mb-4 text-gray-400"></i>
                                You haven't added any books yet.
                            </p>
                            <a href="{{ route('pages.create') }}"
                                class="mt-4 inline-block bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition duration-300">
                                Start Adding Books
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </x-slot:heading>
</x-layout>
