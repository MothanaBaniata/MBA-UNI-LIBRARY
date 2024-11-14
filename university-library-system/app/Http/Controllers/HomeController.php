<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');  // Remove this line if you want the home page to be public
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the required statistics from the models
        $totalUsers = User::count();  // Total registered users (students)
        $totalBooks = Book::count();  // Total books in the library
        $totalCategories = Category::count();  // Total book categories
        $totalBorrowings = Borrowing::count();  // Total borrowings/transactions

        // Fetch the first 10 books
        $books = Book::take(10)->get();  // Fetch the first 10 books

        // Pass the data to the view
        return view('user.home', compact('totalUsers', 'totalBooks', 'totalCategories', 'totalBorrowings', 'books'));
    }
}
