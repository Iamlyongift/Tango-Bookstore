<x-layout>
    <x-slot:heading>
        <!-- About Tango Bookstore Section -->
        <section class="bg-white py-10 px-4 md:px-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-blue-700 mb-4">About Tango Bookstore</h2>
            </div>
        </section>
    </x-slot:heading>

    <section class="bg-white py-10 px-4 md:px-10">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-gray-700 mb-6">
                <strong>Mission:</strong> To bring together brilliant minds for the purpose of creating products and
                services
                that advance civilization.
            </p>
            <p class="text-gray-700 mb-6">
                <strong>Vision:</strong> To be that place where the human mind is given the free rein it needs to
                unleash its
                potential through products and services that advance civilization.
            </p>
            <p class="text-gray-700">
                <strong>What We Do:</strong> In recent months and years, we have focused on products and services that
                empower
                the mind. This is why today:
            </p>
            <!-- Additional Text -->
            <p class="text-gray-700 mt-4">
                We run an online bookstore, a podcast, and are working on a mobile platform to facilitate faster
                learning from
                books.
            </p>
        </div>
    </section>

    <!-- The Team Section -->
    <section class="bg-blue-50 py-10 px-4 md:px-10">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold text-blue-700 text-center mb-10">The Team</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Team Member Card -->
                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <img src="https://via.placeholder.com/100" alt="Team Member"
                        class="w-20 h-20 mx-auto rounded-full mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Temitope Ojo</h3>
                    <p class="text-gray-600 text-sm">Vision Lead</p>
                </div>
                <!-- Duplicate this block for other team members -->
                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <img src="https://via.placeholder.com/100" alt="Team Member"
                        class="w-20 h-20 mx-auto rounded-full mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Olawunfunmi Idowu</h3>
                    <p class="text-gray-600 text-sm">Strategy and Operations</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4 text-center">
                    <img src="https://via.placeholder.com/100" alt="Team Member"
                        class="w-20 h-20 mx-auto rounded-full mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Samuel Oludapo</h3>
                    <p class="text-gray-600 text-sm">Branding and Finance</p>
                </div>
                <!-- Add more team members here -->
            </div>
        </div>
    </section>
</x-layout>
