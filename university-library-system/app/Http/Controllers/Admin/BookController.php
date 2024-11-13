<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        // Fetch all books with their related categories
        $books = Book::with('category')->get();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        // Fetch all categories for the select dropdown
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'author' => 'required|string|max:255',
            'total_copies' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/books');
        }

        // Create the book
        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'total_copies' => $request->total_copies,
            'borrowed_copies' => 0,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function show($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return view('admin.books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'author' => 'required|string|max:255',
            'total_copies' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the book
        $book = Book::findOrFail($id);

        // Handle the image upload if present
        $imagePath = $book->image;
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($imagePath && Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
            $imagePath = $request->file('image')->store('public/books');
        }

        // Update the book
        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'total_copies' => $request->total_copies,
            'borrowed_copies' => $request->borrowed_copies,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        // Delete the image if it exists
        if ($book->image && Storage::exists($book->image)) {
            Storage::delete($book->image);
        }

        // Delete the book
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}
