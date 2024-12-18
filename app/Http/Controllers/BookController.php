<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
  /**
     * Fetch user's reading progress for a specific book.
     */
    public function getProgress($bookId)
    {
        $userId = Auth::id();
        $progress = DB::table('user_book_progress')
            ->where('user_id', $userId)
            ->where('book_id', $bookId)
            ->value('progress');

        return response()->json(['progress' => $progress ?? 0], 200);
    }

    /**
     * Update or insert reading progress for a specific book.
     */
    public function updateProgress(Request $request, $bookId)
    {
        $userId = Auth::id();
        $progress = $request->input('progress');

        if (!is_numeric($progress) || $progress < 0 || $progress > 100) {
            return response()->json(['message' => 'Invalid progress value'], 400);
        }

        DB::table('user_book_progress')->updateOrInsert(
            ['user_id' => $userId, 'book_id' => $bookId],
            ['progress' => $progress]
        );

        return response()->json(['message' => 'Progress updated successfully'], 200);
    }


}
