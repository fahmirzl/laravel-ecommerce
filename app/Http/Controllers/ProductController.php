<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::with('category')->get();
        if ($request->has('search')) {
            $products = Product::with('category')->where('product', 'like', "%$request->search%")->get();
        }
        return view('administrator.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.add-products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();

        $fileName = 'images/' . Str::random(8) . '.' . $extension;
        Storage::disk('public')->put($fileName, file_get_contents($image));

        Product::create([
            'product' => $request->product,
            'price' => $request->price,
            'category_id' => $request->category,
            'image' => $fileName,
            'stock' => $request->stock,
        ]);

        return to_route('admin_products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->where($product);
        return view('administrator.edit-products', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'image' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'product' => $request->product,
            'price' => $request->price,
            'category_id' => $request->category,
            'stock' => $request->stock,
        ];

        if ($request->has('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();

            $fileName = 'images/' . Str::random(8) . '.' . $extension;
            Storage::disk('public')->put($fileName, file_get_contents($image));
            $data['image'] = $fileName;
        }

        $product->update($data);

        return to_route('admin_products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('admin_products');
    }
}
