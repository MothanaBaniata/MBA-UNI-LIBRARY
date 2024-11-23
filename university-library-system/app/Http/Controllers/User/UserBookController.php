<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    // Show details of a specific book
    public function show($id)
    {
        // Find the book by ID, eager load the category relationship
        $book = Book::with('category')->findOrFail($id);

        // Fetch all categories for the sidebar or filter options
        $categories = Category::all();

        return view('user.book-details', compact('book', 'categories'));
    }

    // Borrow a book
    public function borrow($id)
    {
        // Get the current logged-in user
        $user = auth()->user();
        $book = Book::findOrFail($id);

        if ($book->total_copies - $book->borrowed_copies > 0) {
            // Create a new borrowing record
            $borrowing = new Borrowing();
            $borrowing->user_id = $user->id;
            $borrowing->book_id = $book->id;
            $borrowing->borrowed_at = Carbon::now();
            $borrowing->due_date = Carbon::now()->addWeeks(2);
            $borrowing->save();

            // Update the book's borrowed copies count
            $book->borrowed_copies += 1;
            $book->save();

            return redirect()->route('user.book.show', $book->id)->with('success', 'You have successfully borrowed the book!');
        } else {
            return redirect()->route('user.book.show', $book->id)->with('error', 'This book is currently unavailable.');
        }
    }
}
