<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Borrowing;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSearchController extends Controller
{
    public function search(Request $request)
    {
        $validated = $request->validate([
            'query' => 'required|min:5',
        ]);

        $query = $request->input('query');

        if (!$query) {
            return redirect()->route('admin.dashboard');
        }

        $users = User::where('name', 'like', '%' . $query . '%')->get();
        $categories = Category::where('name', 'like', '%' . $query . '%')->get();
        $books = Book::where('title', 'like', '%' . $query . '%')->get();
        $borrowings = Borrowing::where('id', 'like', '%' . $query . '%')->get();
        $events = Event::where('title', 'like', '%' . $query . '%')->get();

        // If exactly one result is found, redirect to that resource page
        if ($users->count() === 1) {
            return redirect()->route('admin.users.show', $users->first()->id);
        }
        if ($books->count() === 1) {
            return redirect()->route('admin.books.show', $books->first()->id);
        }
        if ($categories->count() === 1) {
            return redirect()->route('admin.categories.show', $categories->first()->id);
        }
        if ($borrowings->count() === 1) {
            return redirect()->route('admin.borrowings.show', $borrowings->first()->id);
        }
        if ($events->count() === 1) {
            return redirect()->route('admin.events.show', $events->first()->id);
        }

        return view('admin.search_results', compact('query', 'users', 'books', 'categories', 'borrowings', 'events'));
    }
}
