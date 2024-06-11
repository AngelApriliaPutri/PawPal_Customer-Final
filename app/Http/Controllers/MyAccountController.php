<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class MyAccountController extends Controller
{
    public function view()
    {
        return view("my-account");
    }

    public function accountDetails()
    {
        // Cek apakah USER_ID ada di cookie
        $userId = Cookie::get('user');

        // Jika tidak ada di cookie, ambil dari session
        if (!$userId) {
            $user = Session::get('user');

            // Jika tidak ada user di session, redirect ke halaman login atau lakukan tindakan lain
            if (!$user) {
                return redirect()->route('login')->withErrors(['error' => 'Please log in to access your account details.']);
            }

            $userId = $user->USER_ID;
        }

        // Retrieve user from database
        $user = DB::table('USERS')->where('USER_ID', $userId)->first();

        // Cek apakah user ditemukan
        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'User not found.']);
        }

        // Kirim data user ke view
        // return view('my-account', ['user' => $user]);

        // dd($userId);
        // dd($user->USER_NAME);
        return view('my-account', ['user' => $user]);
    }
}
