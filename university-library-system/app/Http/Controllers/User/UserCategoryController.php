<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    // Show categories and books for the user
    public function index(Request $request)
{
    // Get categories (limit to 5 categories)
    $categories = Category::limit(5)->get();

    // Build query for books
    $query = Book::with('category');

    // Apply search filters
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('title', 'like', '%' . $search . '%')
              ->orWhere('author', 'like', '%' . $search . '%')
              ->orWhereHas('category', function ($query) use ($search) {
                  $query->where('name', 'like', '%' . $search . '%');
              });
    }

    // Apply category filter
    if ($request->has('category')) {
        $categoryId = $request->input('category');
        $query->where('category_id', $categoryId);
    }

    // Fetch paginated books
    $books = $query->paginate(9); // 9 books per page

    return view('user.categories', compact('categories', 'books'));
}

}
