<?php

namespace App\Http\Controllers\User;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('user.contact');
    }

    // Store the contact form data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
