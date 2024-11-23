<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalBooks = Book::count();
        $totalCategories = Category::count();
        $totalBorrowingsThisMonth = Borrowing::whereMonth('borrowed_at', now()->month)
            ->whereYear('borrowed_at', now()->year)
            ->count();

        $books = Book::take(10)->get();
        $events = Event::where('event_date', '>=', now())
            ->orderBy('event_date', 'asc')
            ->take(5)
            ->get();

        return view('user.home', compact('totalUsers', 'totalBooks', 'totalCategories', 'totalBorrowingsThisMonth', 'books', 'events'));
    }
}
