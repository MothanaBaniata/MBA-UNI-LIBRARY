<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $admins = User::whereIn('role', ['admin', 'superadmin'])
            ->where('id', '!=', auth()->user()->id)
            ->get();

        return view('admin.manage_admins.index', compact('admins'));
    }


    public function create()
    {
        return view('admin.manage_admins.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,superadmin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.manage.admins')->with('success', 'Admin or Superadmin created successfully');
    }

    public function profile()
    {
        $user = auth()->user();

        return view('admin.manage_admins.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update the user's name and email
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Prevent superadmins from deleting themselves
        if (auth()->user()->id === $user->id) {
            return redirect()->route('admin.manage.admins')
                ->with('error', 'You cannot delete yourself.');
        }

        // Prevent any superadmin from deleting another superadmin
        if ($user->role === 'superadmin') {
            return redirect()->route('admin.manage.admins')
                ->with('error', 'You cannot delete a superadmin.');
        }

        $user->delete();

        return redirect()->route('admin.manage.admins')
            ->with('success', 'Admin deleted successfully');
    }
}
