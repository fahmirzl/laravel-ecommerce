<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (request()->has('order_id')) {
            $order_id = request('order_id');
            if ($request->has('search') and $request->method('GET')) {
                $search = $request->input('search');
                $orderDetails = OrderDetail::with('product', 'order')->where('order_id', $order_id)->whereHas('product', function ($query) use ($search) {
                    $query->where('product', 'like', "%$search%");
                })->get();
            } else if ($request->method('DETAIL')) {
                $orderDetails = OrderDetail::with('product', 'order')->where('order_id', $order_id)->get();
            }
            return view('administrator.order-details', compact('orderDetails', 'order_id'));
        } else {
            abort(404);
        }
    }

    public static $id;

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
