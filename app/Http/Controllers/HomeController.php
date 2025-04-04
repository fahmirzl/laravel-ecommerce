<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $params = $request->input('type');
        if ($params == 'latest') {
            dd("Latest");
        } else {
            $products = Product::all();
            return view('customer.index', compact('products'));
        }
    }
}
