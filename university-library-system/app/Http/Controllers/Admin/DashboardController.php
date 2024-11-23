<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the necessary data for dashboard overview
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalBooks = Book::count();
        $totalBorrowings = Borrowing::count();
        $totalEvents = Event::count();
        $newBorrowings = Borrowing::where('created_at', '>=', now()->subDays(30))->count();

        // Passing data to view
        return view('admin.dashboard.index', compact('totalUsers', 'totalCategories', 'totalBooks', 'totalBorrowings', 'newBorrowings','totalEvents'));
    }
}
