<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle user registration
    public function store(Request $request)
    {
        // Validate input fields
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create and save the user
        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'remember_token' => Str::random(60), // Generate a random token
        ]);

        // Log in the newly registered user
        Auth::login($user);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle user login
    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to the dashboard with success message
            return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully!');
        }

        // Redirect back with error message if login fails
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ])->onlyInput('email');
    }

    // Show the user dashboard
    public function dashboard()
    {
        // Fetch the authenticated user
        $user = Auth::user();

        // Ensure the relationship with tangos exists
        $tangos = $user->tangos;

        // Pass data to the view
        return view('pages.dashboard', compact('user', 'tangos'));
    }

    // Handle user logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
