<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function view()
    {
        // Mengambil data produk terbaru dari tabel 'PRODUK' untuk tab New
        $newProducts = DB::table('PRODUK')
            ->orderByDesc('PRODUCT_ID')
            ->take(8)
            ->get();

        // Mengambil data produk terlaris dari tabel 'PRODUK' untuk tab Bestsellers
        $bestsellers = DB::table('detail_transactions')
        ->join('PRODUK', 'detail_transactions.PRODUCT_ID', '=', 'PRODUK.PRODUCT_ID')
        ->select('PRODUK.*', DB::raw('SUM(detail_transactions.QTY) as total_sold'))
        ->groupBy('detail_transactions.PRODUCT_ID')
        ->orderByDesc('total_sold')
        ->take(8)
        ->get();

        $dogProductCount = DB::table('CATEGORY')
                ->join('PRODUK', 'CATEGORY.CATEGORY_ID', '=', 'PRODUK.CATEGORY_ID')
                ->where('CATEGORY.CATEGORY_ANIMAL', 'Dog')
                ->where('CATEGORY.STATUS_DEL', 0)
                ->count();

        $catProductCount = DB::table('CATEGORY')
                ->join('PRODUK', 'CATEGORY.CATEGORY_ID', '=', 'PRODUK.CATEGORY_ID')
                ->where('CATEGORY.CATEGORY_ANIMAL', 'Cat')
                ->where('CATEGORY.STATUS_DEL', 0)
                ->count();


        // Mengirimkan data produk ke view index
        return view("index", compact('newProducts', 'bestsellers', 'dogProductCount', 'catProductCount'));
    }
}


