<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// class ShopController extends Controller
// {
//     public function view(Request $request)
//     {
//         $products = DB::table('PRODUK')->paginate(8);
//         // Mengirimkan data produk ke view shop-4-column
//         return view("shop-4-column", compact('products'));
//     }
// }


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;

class ShopController extends Controller
{
    public function view(Request $request)
    {
        // Ambil nomor halaman dari query string, atau default ke 1
        $pageNumber = $request->query('page', 1);

        // Ambil data produk dari database dengan pagination
        $products = DB::table('PRODUK')->paginate(8, ['*'], 'page', $pageNumber);

        // Ambil 8 produk terbaru
        $latestProducts = DB::table('PRODUK')
            ->orderByDesc('PRODUCT_ID')
            ->take(8)
            ->pluck('PRODUCT_ID')
            ->toArray();

        // Mengambil data produk terlaris dari tabel 'PRODUK' untuk tab Bestsellers
        $bestsellers = DB::table('detail_transactions')
        ->join('PRODUK', 'detail_transactions.PRODUCT_ID', '=', 'PRODUK.PRODUCT_ID')
        ->select('PRODUK.*', DB::raw('SUM(detail_transactions.QTY) as total_sold'))
        ->groupBy('detail_transactions.PRODUCT_ID')
        ->orderByDesc('total_sold')
        ->take(8)
        ->pluck('PRODUCT_ID')
        ->toArray();

        // Kembalikan view dengan data produk dan produk terbaru
        return view('shop-4-column', ['products' => $products, 'latestProducts' => $latestProducts, 'bestsellers' => $bestsellers]);
    }

    public function showCategory(Request $request, $animal, $category = null)
    {
        $pageNumber = $request->query('page', 1);
        $perPage = 8; // Number of items per page

        // Mengambil kategori berdasarkan hewan
        $categories = DB::table('CATEGORY')
            ->where('CATEGORY_ANIMAL', $animal)
            ->where('STATUS_DEL', 0)
            ->get();

        // Mengambil produk berdasarkan kategori jika kategori dipilih
        if ($category) {
            $products = DB::table('PRODUK')
                ->join('CATEGORY', 'PRODUK.CATEGORY_ID', '=', 'CATEGORY.CATEGORY_ID')
                ->where('CATEGORY.CATEGORY_ANIMAL', $animal)
                ->where('CATEGORY.CATEGORY_NAME', $category)
                ->where('PRODUK.STATUS_DEL', 0)
                ->select('PRODUK.*')
                ->paginate($perPage, ['*'], 'page', $pageNumber);
        } else {
            $products = DB::table('PRODUK')
                ->join('CATEGORY', 'PRODUK.CATEGORY_ID', '=', 'CATEGORY.CATEGORY_ID')
                ->where('CATEGORY.CATEGORY_ANIMAL', $animal)
                ->where('PRODUK.STATUS_DEL', 0)
                ->select('PRODUK.*')
                ->paginate($perPage, ['*'], 'page', $pageNumber);
        }

        // Ambil 8 produk terbaru
        $latestProducts = DB::table('PRODUK')
            ->orderByDesc('PRODUCT_ID')
            ->take(8)
            ->pluck('PRODUCT_ID')
            ->toArray();

        // Mengambil data produk terlaris dari tabel 'PRODUK' untuk tab Bestsellers
        // $bestsellers = DB::table('detail_transactions')
        //     ->join('PRODUK', 'detail_transactions.PRODUCT_ID', '=', 'PRODUK.PRODUCT_ID')
        //     ->select('PRODUK.*', DB::raw('SUM(detail_transactions.QTY) as total_sold'))
        //     ->groupBy('detail_transactions.PRODUCT_ID')
        //     ->orderByDesc('total_sold')
        //     ->take(8)
        //     ->pluck('PRODUCT_ID')
        //     ->toArray();

        $bestsellers = DB::table('DETAIL_TRANSACTIONS')
            ->join('PRODUK', 'DETAIL_TRANSACTIONS.PRODUCT_ID', '=', 'PRODUK.PRODUCT_ID')
            ->select('PRODUK.*', DB::raw('SUM(DETAIL_TRANSACTIONS.QTY) as total_sold'))
            ->groupBy(
                'PRODUK.PRODUCT_ID',
                'PRODUK.CATEGORY_ID',
                'PRODUK.PRODUCT_NAME',
                'PRODUK.PRODUCT_SIZE',
                'PRODUK.PRODUCT_PRICE',
                'PRODUK.PRODUCT_STOCK',
                'PRODUK.PRODUCT_DESC',
                'PRODUK.STATUS_DEL'
                // Add other columns from the PRODUK table here if necessary
            )
            ->orderByDesc('total_sold')
            ->take(8)
            ->pluck('PRODUCT_ID')
            ->toArray();

        return view('shop-category', compact('animal', 'category', 'categories', 'products', 'latestProducts', 'bestsellers'));
    }
   
}