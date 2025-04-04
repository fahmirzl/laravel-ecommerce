<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $params = $request->input('type');
        $products = null;
        if ($params == 'latest') {
            $products = Product::where('id', 2)->get();
        } else {
            $products = Product::where('id', 1)->get();
        }
        return view('customer.index', compact('products'));
    }
}
