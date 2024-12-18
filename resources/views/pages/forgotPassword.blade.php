<x-layout>
    <x-slot:heading>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-center text-gray-700 mb-4">Forgot Password</h2>
            <p class="text-center text-gray-500 mb-6">Enter your email address below to receive a password reset link.
            </p>

            <form action="{{ route('password.email') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="you@example.com">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Send Reset Link
                </button>
            </form>
        </div>
    </x-slot:heading>
</x-layout>
