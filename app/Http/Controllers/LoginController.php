<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('USER_USERNAME');
        $password = $request->input('USER_PASSWORD');
        $remember = $request->has('remember');

        // Retrieve user data from the database
        $user = DB::table('USERS')->where('USER_USERNAME', $username)->first();

        // Check if the user exists and the password matches
        if ($user && $this->checkPassword($password, $user->USER_PASSWORD)) {
            // Authentication passed...
            if ($remember) {
                // Set a cookie for the remember me functionality
                Cookie::queue('user', $user, 120); // expires in 120 minutes
            }
            // Save user info in session
            Session::put('user', $user);

            return redirect()->route('index');
        } else {
            return back()->withErrors([
                'username' => 'The username or password does not match our records.',
            ]);
        }
    }

    private function checkPassword($password, $hashedPassword)
    {
        // Hash the provided password using SHA256
        $hashedInputPassword = hash('sha256', $password);

        // Check if the hashed input password matches the hashed password stored in the database
        return $hashedInputPassword === $hashedPassword;
    }

    public function logout(Request $request)
    {
        // Clear user data from session
        $request->session()->forget('user');

        // Clear user cookie if it exists
        if ($request->hasCookie('user')) {
            Cookie::queue(Cookie::forget('user'));
        }

        // Redirect to login page after logout
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }

}
