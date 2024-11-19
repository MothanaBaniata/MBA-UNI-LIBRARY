<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'superadmin') {
            $users = User::where('role', 'student')->get();
        } else {
            $users = User::where('role', 'student')->get();
        }
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a student
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'student',
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Student created successfully');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Ensure admins can only edit students
        if (auth()->user()->role === 'admin' && $user->role !== 'student') {
            return redirect()->route('admin.users.index')->with('error', 'You cannot edit this user');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->role === 'admin' && in_array($request->role, ['admin', 'superadmin'])) {
            return redirect()->route('admin.users.index')->with('error', 'You cannot assign admin or superadmin roles');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed', // Validate password confirmation
            'role' => auth()->user()->role === 'admin' ? 'required|in:student' : 'required|in:superadmin,admin,student',
        ]);

        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {

        $user = User::findOrFail($id);
        if (auth()->user()->role === 'admin' && in_array($user->role, ['admin', 'superadmin'])) {
            return redirect()->route('admin.users.index')->with('error', 'You cannot delete this user');
        }
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'Student deleted successfully');
    }
}
