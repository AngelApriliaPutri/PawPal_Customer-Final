<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function view()
    {
        return view("register");
    }
    public function register(Request $request)
    {

        // Validate input
        $request->validate([
            'name' => 'required|string|min:4',
            'username' => 'required|string|min:4',
            'password' => 'required|string|min:6',
            'email' => 'required|string|email|max:30',
        ]);

        // Generate user ID
        $lastUserId = DB::table('USERS')->max('USER_ID');
        if ($lastUserId) {
            $newIdNumber = (int)substr($lastUserId, 2) + 1;
            $userId = 'UV' . str_pad($newIdNumber, 4, '0', STR_PAD_LEFT);
        } else {
            $userId = 'UV0001';
        }

        // Encrypt password using SHA-256
        $encryptedPassword = hash('sha256', $request->password);

        // dd($userId, $request->username, $request->email, $encryptedPassword);
        // Insert new user into the database
        DB::table('USERS')->insert([
            'USER_ID' => $userId,
            'USER_USERNAME' => $request->username,
            'USER_NAME' => $request->name, // You can adjust this according to your needs
            'USER_EMAIL' => $request->email,
            'USER_PASSWORD' => $encryptedPassword,
            'USER_ADMIN' => false, // Set default to false
            'STATUS_DEL' => '0', // Set default to 0
        ]);

        // Redirect to login page after successful registration
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
