<x-layout>
    <x-slot:heading>
        <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center px-4 py-8">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-2xl rounded-xl overflow-hidden">
                    <div class="bg-blue-600 text-white text-center py-5">
                        <h2 class="text-2xl font-bold">{{ __('Create Account') }}</h2>
                    </div>

                    <div class="p-8">
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <div class="space-y-6">
                                <div class="relative">
                                    <label for="fullname"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Name') }}</label>
                                    <input id="fullname" type="text"
                                        class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none"
                                        name="fullname" value="{{ old('fullname') }}" required autocomplete="name"
                                        autofocus>
                                    @error('fullname')
                                        <span class="text-red-500 text-xs absolute">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <label for="username"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Username') }}</label>
                                    <input id="username" type="text"
                                        class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none"
                                        name="username" value="{{ old('username') }}" required autocomplete="name"
                                        autofocus>
                                    @error('username')
                                        <span class="text-red-500 text-xs absolute">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <label for="email"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="text-red-500 text-xs absolute">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <label for="password"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Password') }}</label>
                                    <div class="relative">
                                        <input id="password" type="password"
                                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none pr-10"
                                            name="password" required autocomplete="new-password">
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

                                <div class="relative">
                                    <label for="password-confirm"
                                        class="text-sm text-gray-600 absolute -top-4">{{ __('Confirm Password') }}</label>
                                    <div class="relative">
                                        <input id="password-confirm" type="password"
                                            class="w-full border-b-2 border-gray-300 focus:border-blue-500 transition duration-300 pb-2 text-gray-800 bg-transparent focus:outline-none pr-10"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <button type="button" id="toggleConfirmPassword"
                                            class="absolute right-0 top-0 mt-1 mr-2 text-gray-600 focus:outline-none">
                                            <svg id="confirmEyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <button type="submit"
                                    class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-102 shadow-md">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                <p class="text-sm text-gray-600">
                                    Already have an account?
                                    <a href="{{ route('auth.login') }}" class="text-blue-600 hover:underline">
                                        Login
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
                function setupPasswordToggle(passwordInputId, toggleButtonId, eyeIconId) {
                    const passwordInput = document.getElementById(passwordInputId);
                    const togglePasswordButton = document.getElementById(toggleButtonId);
                    const eyeIcon = document.getElementById(eyeIconId);

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
                }

                setupPasswordToggle('password', 'togglePassword', 'eyeIcon');
                setupPasswordToggle('password-confirm', 'toggleConfirmPassword', 'confirmEyeIcon');
            });
        </script>
    </x-slot:heading>
</x-layout>
