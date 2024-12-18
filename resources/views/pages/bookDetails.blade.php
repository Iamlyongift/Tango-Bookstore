<x-layout>
    <x-slot:heading>
        <div class="container mx-auto mt-8 max-w-4xl">
            @if ($tango)
                <div class="grid md:grid-cols-2 gap-8 bg-white shadow-2xl rounded-xl overflow-hidden">
                    <!-- Book Cover and Basic Info -->
                    <div class="relative">
                        <img src="{{ $tango->cover_image ? asset('storage/' . $tango->cover_image) : 'https://via.placeholder.com/400x600' }}"
                            alt="{{ $tango->title }} Cover" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
                            <h2 class="text-2xl font-bold truncate">{{ $tango->title }}</h2>
                        </div>
                    </div>

                    <!-- Book Details -->
                    <div class="p-6 flex flex-col justify-between">
                        <div>
                            <div class="mb-6">
                                <h5 class="text-xl font-semibold text-gray-800 mb-2">Book Details</h5>
                                <p class="text-gray-600 mb-2"><strong>Author:</strong> {{ $tango->author }}</p>
                                <p class="text-gray-600 mb-2"><strong>Genre:</strong> {{ $tango->genre }}</p>
                            </div>

                            <div class="mb-6">
                                <h5 class="text-xl font-semibold text-gray-800 mb-2">Description</h5>
                                <p class="text-gray-600 ">{{ $tango->description }}</p>
                            </div>

                            <!-- Progress Section -->
                            <div class="mb-6">
                                <h5 class="text-xl font-semibold text-gray-800 mb-2">Reading Progress</h5>
                                <div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden mb-2">
                                    <div id="progress-bar"
                                        class="bg-indigo-600 h-4 rounded-full transition-all duration-300"
                                        style="width: {{ $tango->progress ?? 0 }}%"></div>
                                </div>
                                <p id="current-progress" class="text-gray-600">
                                    Progress: <span id="progress-value">{{ $tango->progress ?? 0 }}%</span>
                                </p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-4">
                            <!-- Update Progress Form -->
                            <form id="progress-form" class="w-full">
                                <div class="flex items-center space-x-2">
                                    <input type="number" id="progress-input" name="progress" min="0"
                                        max="100" placeholder="Enter progress %"
                                        class="flex-grow border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <button type="submit"
                                        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                        Update
                                    </button>
                                </div>
                            </form>

                            <!-- Delete Book Button -->
                            <form action="{{ route('pages.destroy', $tango->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition-colors">
                                    Delete Book
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Additional Book Info -->
                <div class="mt-8 bg-gray-50 p-4 rounded-lg text-sm text-gray-600">
                    <p>Added by: {{ $tango->user->fullname ?? 'Unknown' }}</p>
                    <p>Added on: {{ $tango->created_at->format('F j, Y') }}</p>
                </div>
            @else
                <!-- Book Not Found Alert -->
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-6">
                    <p>Book not found.</p>
                </div>
            @endif
        </div>
    </x-slot:heading>
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const bookId = {{ $tango->id }};
        const progressBar = document.getElementById("progress-bar");
        const progressValue = document.getElementById("progress-value");
        const progressForm = document.getElementById("progress-form");
        const progressInput = document.getElementById("progress-input");

        // Update progress on form submission
        progressForm.addEventListener("submit", function(e) {
            e.preventDefault();
            const newProgress = progressInput.value;

            // Validate input
            if (newProgress < 0 || newProgress > 100) {
                alert("Progress must be between 0 and 100");
                return;
            }

            fetch(`/books/${bookId}/progress`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({
                        progress: newProgress
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update UI
                    progressBar.style.width = `${newProgress}%`;
                    progressValue.textContent = `${newProgress}%`;

                    // Optional: Show success message
                    alert("Progress updated successfully!");

                    // Reset input
                    progressInput.value = '';
                })
                .catch(error => {
                    console.error("Error updating progress:", error);
                    alert("Failed to update progress. Please try again.");
                });
        });
    });
</script>
