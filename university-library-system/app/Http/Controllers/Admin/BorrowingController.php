<?php


namespace App\Http\Controllers\Admin;

use App\Models\Borrowing;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BorrowingController extends Controller
{
    // Display a listing of borrowings
    public function index()
    {
        $borrowings = Borrowing::with('user', 'book')->get();
        return view('admin.borrowings.index', compact('borrowings'));
    }

    // Show the form for creating a new borrowing
    public function create()
    {
        $users = User::all();
        $books = Book::all();
        return view('admin.borrowings.create', compact('users', 'books'));
    }

    // Store a newly created borrowing
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date',
        ]);

        Borrowing::create($request->all());

        return redirect()->route('admin.borrowings.index')
            ->with('success', 'Borrowing created successfully.');
    }

    // Display the specified borrowing
    public function show($id)
    {
        $borrowing = Borrowing::with('user', 'book')->findOrFail($id);
        return view('admin.borrowings.show', compact('borrowing'));
    }

    // Show the form for editing the specified borrowing
    public function edit($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $users = User::all();
        $books = Book::all();
        return view('admin.borrowings.edit', compact('borrowing', 'users', 'books'));
    }

    // Update the specified borrowing
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowed_at' => 'required|date',
            'due_date' => 'required|date',
        ]);

        $borrowing = Borrowing::findOrFail($id);
        $borrowing->update($request->all());

        return redirect()->route('admin.borrowings.index')
            ->with('success', 'Borrowing updated successfully.');
    }

    // Remove the specified borrowing
    public function destroy($id)
    {
        $borrowing = Borrowing::findOrFail($id);
        $borrowing->delete();

        return redirect()->route('admin.borrowings.index')
            ->with('success', 'Borrowing deleted successfully.');
    }
}
