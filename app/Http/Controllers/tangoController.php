<?php

namespace App\Http\Controllers;

use App\Models\Tango;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TangoController extends Controller
{
    // Fetch and display a paginated list of books with their associated users
    public function books()
    {
        $tangos = Tango::with('user') // Eager load the associated user for each book
            ->orderBy('created_at', 'desc') // Order books by creation date in descending order
            ->paginate(10); // Paginate the results to display 10 per page

        return view('pages.books', compact('tangos')); // Return the books view with the fetched data
    }

    // Fetch and display details of a specific book by ID
    public function bookDetails($id)
    {
        $tango = Tango::findOrFail($id); // Find the book by ID or fail with a 404 error
        return view('pages.bookDetails', compact('tango')); // Return the book details view with the book data
    }

    // Show the form to add a new book
    public function create()
    {
        $users = User::all(); // Fetch all users
        return view('pages.create', ["users" => $users]); // Return the create book form view
    }

    // Show the "About" page
    public function about()
    {
        return view('pages.about'); // Return the about page view
    }

    // Show the "Contact" page
    public function contact()
    {
        return view('pages.contact'); // Return the contact page view
    }


    // Store a new book and assign it to the logged-in user
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'genre' => 'required|string|max:255',
                'description' => 'required|string',
                'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $coverImagePath = null;
            if ($request->hasFile('cover_image')) {
                $coverImagePath = $request->file('cover_image')->store('cover_images', 'public');
            }

            $book = Auth::user()->tangos()->create([
                'title' => $validated['title'],
                'author' => $validated['author'],
                'genre' => $validated['genre'],
                'description' => $validated['description'],
                'cover_image' => $coverImagePath,
            ]);

            return redirect()->route('dashboard')->with('success', 'Book Created Successfully');
        } catch (\Exception $e) {
            \Log::error('Book creation error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to create book']);
        }
    }

    // Update the reading progress of a book for the logged-in user
    public function updateProgress(Request $request, $bookId)
    {
        $validated = $request->validate([
            'progress' => 'required|numeric|min:0|max:100'
        ]);

        $tango = Tango::findOrFail($bookId);
        $tango->progress = $validated['progress'];
        $tango->save();

        return response()->json([
            'message' => 'Progress updated successfully',
            'progress' => $tango->progress
        ]);
    }

    public function fetchBooksByGenre(Request $request)
    {
        $genre = $request->query('genre');

        if (!$genre) {
            return response()->json([
                'error' => 'Genre is required.'
            ], 400);
        }

        $books = Tango::where('genre', $genre)->get();

        if ($books->isEmpty()) {
            return response()->json([
                'message' => 'No books found in this genre.'
            ], 404);
        }

        return response()->json($books, 200);
    }


    // Handle the deletion of a specific blog post
    public function destroy($id) {
        $book = Tango::findOrFail($id);
        $book->delete();
        return redirect()->route('welcome')->with('success', 'Book Deleted');
    }

}
