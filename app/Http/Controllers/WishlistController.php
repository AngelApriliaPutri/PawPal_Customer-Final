<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function view(Request $request)
    {
        $userId = Cookie::get('user');

        if (!$userId) {
            $user = Session::get('user');

            if (!$user) {
                return redirect()->route('login')->withErrors(['error' => 'Please log in to access your account details.']);
            }

            $userId = $user->USER_ID;
        }

        $products = DB::table('PRODUK as P')
            ->join('WISHLIST as W', 'W.PRODUCT_ID', '=', 'P.PRODUCT_ID')
            ->where('W.USER_ID', $userId)
            ->where('W.STATUS_DEL', 0)
            ->select('P.PRODUCT_ID', 'P.PRODUCT_NAME', 'P.PRODUCT_PRICE')
            ->get();

            if ($products->isEmpty()) {
                return redirect()->route('wishlist.empty');
            }

            return view('wishlist', compact('products'));
    }

    public function store(Request $request, $productId)
    {
        $userId = Cookie::get('user');
        dd($userId);
        if (!$userId) {
            $user = Session::get('user');
            if (!$user) {
                return redirect()->route('login')->withErrors(['error' => 'Please log in to access your wishlist.']);
            }
            $userId = $user->USER_ID;
        }

        $existingWishlistItem = DB::table('WISHLIST')
            ->where('PRODUCT_ID', $productId)
            ->where('USER_ID', $userId)
            ->first();

        if (!$existingWishlistItem) {
            DB::table('WISHLIST')->insert([
                'PRODUCT_ID' => $productId,
                'USER_ID' => $userId,
                'STATUS_DEL' => 0
            ]);
        }

        return redirect()->route('wishlist.view')->with('success', 'Product added to wishlist!');
    }

    public function destroy($productId)
    {
        $userId = Cookie::get('user');
        if (!$userId) {
            $user = Session::get('user');
            if (!$user) {
                return redirect()->route('login')->withErrors(['error' => 'Please log in to access your wishlist.']);
            }
            $userId = $user->USER_ID;
        }

        DB::table('WISHLIST')
            ->where('PRODUCT_ID', $productId)
            ->where('USER_ID', $userId)
            ->update(['STATUS_DEL' => 1]);

        return redirect()->route('wishlist.view')->with('success', 'Product removed from wishlist!');
    }

    public function addCart($productId)
    {
        $userId = Cookie::get('user');
        dd($userId);
        if (!$userId) {
            $user = Session::get('user');
            if (!$user) {
                return redirect()->route('login')->withErrors(['error' => 'Please log in to access your wishlist.']);
            }
            $userId = $user->USER_ID;
        }

        $existingCartItem = DB::table('CART')
            ->where('PRODUCT_ID', $productId)
            ->where('USER_ID', $userId)
            ->first();

        if (!$existingCartItem) {
            DB::table('CART')->insert([
                'USER_ID' => $userId,
                'PRODUCT_ID' => $productId,
                'CART_QTY' => 1,
                'STATUS_DEL' => 0
            ]);
        }

        return redirect()->route('cart.view')->with('success', 'Product added to cart!');
    }
}
