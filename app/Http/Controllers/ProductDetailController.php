<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function view($productId)
    {
        // Di sini Anda dapat menambahkan logika untuk mengambil detail produk berdasarkan ID dari database
        $product = DB::table('PRODUK')->where('PRODUCT_ID', $productId)->first();

        $category = DB::table('PRODUK')
        ->join('CATEGORY', 'CATEGORY.CATEGORY_ID', '=', 'PRODUK.CATEGORY_ID')
        ->where('PRODUK.PRODUCT_ID', $productId)
        ->select('PRODUK.*', 'CATEGORY.CATEGORY_NAME', 'CATEGORY.CATEGORY_ANIMAL')
        ->first();

        // Kirim detail produk ke view
        return view("single-product-variable", compact('product', 'category'));
    }


}
