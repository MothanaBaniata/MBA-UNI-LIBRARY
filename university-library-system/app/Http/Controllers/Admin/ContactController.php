<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // Display a listing of contact messages
    public function index()
    {
        $contacts = Contact::all();  // You can add pagination if needed
        return view('admin.contacts.index', compact('contacts'));
    }

    // Show the details of a single contact message
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    // Delete a contact message
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Message deleted successfully');
    }
}
