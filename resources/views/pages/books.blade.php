<x-layout>
    <x-slot:heading>
        <section id="explore" class="py-16 bg-gradient-to-r from-purple-100 to-indigo-100">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Discover Your Next Read</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore our curated collection of books across various genres
                </p>
            </div>
        </section>
    </x-slot:heading>

    <section id="books" class="container mx-auto py-12 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($tangos as $tango)
                <div
                    class="bg-white shadow-lg rounded-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ $tango->cover_image ? asset('storage/' . $tango->cover_image) : 'https://via.placeholder.com/300x450' }}"
                            alt="{{ $tango->title }} Book Cover" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-3">
                            <h3 class="font-bold text-lg truncate">{{ $tango->title }}</h3>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <p class="text-gray-600 text-sm mb-2">
                                <span class="font-semibold">Author:</span> {{ $tango->author }}
                            </p>
                            <p class="text-gray-600 text-sm mb-2">
                                <span class="font-semibold">Genre:</span> {{ $tango->genre }}
                            </p>

                            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
                                <div class="bg-purple-600 h-2.5 rounded-full"
                                    style="width: {{ $tango->progress ?? 0 }}%"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">
                                Progress: {{ $tango->progress ?? 0 }}%
                            </p>
                        </div>

                        <a href="{{ route('pages.bookDetails', $tango->id) }}"
                            class="w-full block text-center bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <main>
        <div class="container mx-auto py-8 px-4">
            <div class="flex justify-center">
                {{ $tangos->links('pagination::tailwind') }}
            </div>
        </div>
    </main>
</x-layout>

<script>
    document.getElementById("progress-form")?.addEventListener("submit", function(e) {
        e.preventDefault();

        const bookId = {{ $tango->id }};
        const progressInput = document.getElementById("progress").value;

        fetch(`/books/${bookId}/progress`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    progress: progressInput
                })
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Progress Updated',
                    text: 'Your reading progress has been successfully updated!',
                    confirmButtonColor: '#7C3AED'
                });
            })
            .catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong updating your progress.',
                    confirmButtonColor: '#EF4444'
                });
            });
    });
</script>
