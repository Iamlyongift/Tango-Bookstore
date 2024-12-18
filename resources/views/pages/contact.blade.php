<x-layout>
    <x-slot:heading>
        <!-- Contact Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <!-- Heading -->
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Contact Us</h1>
    </x-slot:heading>
    <!-- Contact Details -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <div class="text-gray-700 text-center">
            <p class="mb-4">
                At <span class="font-bold">Tango Bookstore</span>, we are committed to giving our customers the best
                e-shopping experience and service.
                Your growth is of significant importance to us. Let us know how we can help. Cheers!
            </p>
            <p class="font-bold mb-2">Tango Bookstore</p>
            <p>1 Olufemi, off Nathan, Surulere, Lagos, Nigeria.</p>
            <p>Call Us: <span class="font-bold">234 904 643 6215</span></p>
            <p>Mail Us @: <a href="mailto:contact@mindville.ng" class="text-blue-600 underline">contact@mindville.ng</a>
            </p>
        </div>
    </div>

    <!-- Reminder Section -->
    <div class="bg-blue-100 border-2 border-blue-500 rounded-lg p-6 text-center mb-8">
        <p class="text-blue-600 font-bold italic">
            “Quick reminder! If you browse through our entire catalog, and you seem not to find the exact read
            that interests you,
            kindly contact us via mail or direct WhatsApp message. Cheers!”
        </p>
    </div>

    <!-- Contact Form -->
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Get in touch</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <input type="text" name="name" placeholder="Name"
                    class="w-full border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <input type="email" name="email" placeholder="Email"
                    class="w-full border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <textarea name="message" placeholder="Your Message" rows="4"
                    class="w-full border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-400 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-all">
                    Send
                </button>
            </div>
        </form>
    </div>

    <!-- WhatsApp Button -->
    <div class="fixed bottom-4 right-4">
        <a href="https://wa.me/2349046436215" target="_blank"
            class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-6 h-6">
                <path
                    d="M8.051 0a8.05 8.05 0 1 0 5.675 13.808l1.042 3.794-3.834-1.01A8.051 8.051 0 0 0 8.051 0zm.117 1.067a6.935 6.935 0 1 1-4.908 11.845.655.655 0 0 1-.167-.622l.441-1.635a.655.655 0 0 1 .244-.377l1.94-1.94a.655.655 0 0 1 .426-.205h.006a.655.655 0 0 1 .462.19l1.78 1.78a.655.655 0 0 0 .922 0l2.457-2.457a.655.655 0 0 0 0-.922l-1.777-1.777a.655.655 0 0 1-.19-.462v-.004a.655.655 0 0 1 .204-.426l1.94-1.94a.655.655 0 0 1 .378-.244l1.635-.441a.655.655 0 0 1 .622.167A6.937 6.937 0 0 1 8.168 1.067z" />
            </svg>
        </a>
    </div>
    </section>
</x-layout>
