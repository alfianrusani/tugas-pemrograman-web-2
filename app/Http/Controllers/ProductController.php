<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            'title' => 'Products',
            'product' => Product::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', ['title' => 'Create Products']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0|max:999999999',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
        ], [
            'name.required' => "Product name must be filled",
            'name.max' => "Product name cannot be more than :max characters",
            'price.required' => "Price must be filled",
            'price.integer' => "Price must be a number",
            'price.min' => "Price cannot be negative",
            'price.max' => "Price is too large",
            'stock.required' => "Stock must be filled",
            'stock.integer' => "Stock must be a number",
            'stock.min' => "Stock cannot be negative",
            'description.required' => "Description must be filled",
        ]);
        Product::create($validated);
        return to_route('product.index')->withSuccess('Product Succesfully Added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
