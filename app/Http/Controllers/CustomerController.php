<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __invoke(Request $request) {
        $search = $request->input('search');
        $customers = User::where('role', '=', 'customer')->where('name', 'like', "%$search%")->get();
        return view('administrator.customers', compact('customers'));
    }
}
