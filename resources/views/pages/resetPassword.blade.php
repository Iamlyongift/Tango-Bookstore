<x-layout>
    <x-slot:heading>
        <h2>Reset Password</h2>

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <label for="email">Email Address</label>
            <input type="email" name="email" required>
            <label for="password">New Password</label>
            <input type="password" name="password" required>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" required>
            <button type="submit">Reset Password</button>
        </form>
    </x-slot:heading>
</x-layout>