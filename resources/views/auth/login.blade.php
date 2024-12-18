<x-layout>
    <x-slot:heading>
        <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-2xl rounded-xl overflow-hidden">
                    <div class="bg-blue-600 text-white text-center py-5">
                        <h2 class="text-2xl font-bold">{{ __('Login to Your Account') }}</h2>
                    </div>

                    <div class="p-8">
                        <form method="POST" action="{{ route('user.login') }}" id="loginForm">
                            @csrf

                            <div class="space-y-6">
                                <div class="relative">
                                    <label for="email"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Email') }}</label>
                                    <input type="email" name="email"
                                        class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none"
                                        required autocomplete="email">
                                    @error('email')
                                        <span class="text-red-500 text-xs absolute">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <label for="password"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Password') }}</label>
                                    <div class="relative">
                                        <input type="password" name="password" id="password"
                                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none pr-10"
                                            required autocomplete="current-password">
                                        <button type="button" id="togglePassword"
                                            class="absolute right-0 top-0 mt-1 mr-2 text-gray-600 focus:outline-none">
                                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                            </svg>
                                        </button>
                                    </div>
                                    @error('password')
                                        <span class="text-red-500 text-xs absolute">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex items-center justify-between mt-6 mb-4">
                                <div class="flex items-center">
                                    <input id="remember" type="checkbox" name="remember"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>

                                <div>
                                    <a href="{{ route('password.request') }}"
                                        class="text-sm text-blue-600 hover:text-blue-500">
                                        {{ __('Forgot password?') }}
                                    </a>
                                </div>
                            </div>

                            <div class="mt-6">
                                <button type="submit"
                                    class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-102 shadow-md">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                <p class="text-sm text-gray-600">
                                    {{ __('Don\'t have an account?') }}
                                    <a href="{{ route('auth.register') }}" class="text-blue-600 hover:underline">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const passwordInput = document.getElementById('password');
                const togglePasswordButton = document.getElementById('togglePassword');
                const eyeIcon = document.getElementById('eyeIcon');

                togglePasswordButton.addEventListener('click', function() {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        eyeIcon.innerHTML = `
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        `;
                    } else {
                        passwordInput.type = 'password';
                        eyeIcon.innerHTML = `
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                        `;
                    }
                });
            });
        </script>
    </x-slot:heading>
</x-layout>
