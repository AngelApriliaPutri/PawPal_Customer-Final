<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function view()
    {
        $userId = Cookie::get('user');

        // Jika tidak ada di cookie, ambil dari session
        if (!$userId) {
            $user = Session::get('user');

            // Jika tidak ada user di session, redirect ke halaman login atau lakukan tindakan lain


            $userId = $user->USER_ID;
        }

        $userCart = CheckoutController::getUserCart($userId);

        return view("checkout",["datacart" => $userCart,]);
    }
    public function getUserCart(string $id){
        $userCart = DB::table('CART')
        ->join('PRODUK','PRODUK.PRODUCT_ID','=','CART.PRODUCT_ID')
        ->select('CART.PRODUCT_ID','PRODUK.PRODUCT_NAME','PRODUK.PRODUCT_PRICE','CART.CART_QTY',DB::raw('CART.CART_QTY * PRODUK.PRODUCT_PRICE AS SUBTOTAL'))
        ->where('CART.USER_ID','=',$id)
        ->where('CART.STATUS_DEL', '=',0)
        ->get(); // Execute the query and get results

        foreach ($userCart as $item) {
            $productId = $item->PRODUCT_ID;
        }

        return $userCart;
    }
    public function getShipping(Request $request){
        $price = $request->input('shipping');
        return session()->put('shipping', $price);;
    }
    public function addOrder(Request $request)
    {
        $datas = $request->input('mydata');

            $first = $datas['first_name'];
            $last = $datas['last_name'];
            $address = $datas['address'];
            $phone = $datas['phone'];
        $userId = Cookie::get('user');

        // Jika tidak ada di cookie, ambil dari session
        if (!$userId) {
            $user = Session::get('user');
            $userId = $user->USER_ID;
        }

        $userCart = CheckoutController::getUserCart($userId);
        $amount = 0;
        $quantity = 0;
        foreach ($userCart as $cart){
            $amount += $cart->SUBTOTAL;
            $quantity += $cart->CART_QTY;
        };
        $amount += session('shipping');
            DB::table('TRANSACTIONS')->INSERT([
                'USER_ID' => $userId,
                'TRANS_DATE' => now(),
                'TRANS_TOTAL' => $amount,
                'TRANS_QTY' => $quantity,
                'TRANS_ADDRESS' => $address,
                'TRANS_PHONE' => $phone,
                'NAMA_PENERIMA' => $first . ' ' . $last,
            ]);
            $latestOrderID = DB::table('TRANSACTIONS')
            ->select(DB::raw('MAX(TRANS_ID) AS latest_order_id'))
            ->orderBy('TRANS_DATE', 'DESC')
            ->first();
    foreach ($userCart as $cart){

        DB::table('DETAIL_TRANSACTIONS')->INSERT([
            'PRODUCT_ID' =>$cart->PRODUCT_ID,
            'TRANS_ID' => $latestOrderID->latest_order_id,
            'QTY'=>$cart->CART_QTY,
            'ITEM_PRICE'=> $cart->SUBTOTAL
        ]);
        DB::table('CART')
        ->where('USER_ID',$userId)
        ->where('PRODUCT_ID',$cart->PRODUCT_ID)
        ->update(['STATUS_DEL' => 1]);
    };

    }

}
