<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
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
}
