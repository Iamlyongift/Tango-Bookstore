<x-layout>
    <x-slot:heading>
        <section>
            <form action="{{ route('books.save') }}" method="POST" enctype="multipart/form-data"
                class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
                <!-- CSRF token for security -->
                @csrf

                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create a New Book</h2>

                <!-- Title Field -->
                <label for="title" class="block text-gray-700 font-medium mb-2">Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required
                    class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">

                <!-- Author Field -->
                <label for="author" class="block text-gray-700 font-medium mb-2">Author:</label>
                <input type="text" id="author" name="author" value="{{ old('author') }}" required
                    class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">

                <!-- Genre Field -->
                <label for="genre" class="block text-gray-700 font-medium mb-2">Genre:</label>
                <input type="text" id="genre" name="genre" value="{{ old('genre') }}" required
                    class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">

                <!-- Description Field -->
                <label for="description" class="block text-gray-700 font-medium mb-2">Description:</label>
                <textarea id="description" name="description" required
                    class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:border-indigo-500 mb-4">{{ old('description') }}</textarea>

                <label for="cover_image" class="block text-gray-700 font-medium mb-2">Cover Image:</label>
                <input type="file" id="cover_image" name="cover_image" class="w-full mb-4">

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold p-3 rounded-lg hover:bg-indigo-700 transition duration-300 mt-4">
                    Create Book
                </button>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <ul class="px-4 py-2 bg-red-100">
                        @foreach ($errors->all() as $error)
                            <li class="my-2 text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
            <p></p>
        </section>
    </x-slot:heading>
</x-layout>
