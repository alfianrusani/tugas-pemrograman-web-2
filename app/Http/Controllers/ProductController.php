<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
            'product' => Product::latest('created_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'title' => 'Create Products',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer|min:0|max:999999999',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
        ], [
            'name.required' => "Product name must be filled",
            'name.max' => "Product name cannot be more than :max characters",
            'category_id.required' => "Category must be selected",
            'category_id.exists' => "Selected category is not found",
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
        return view('product.edit', [
            'title' => 'Edit Products',
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer|min:0|max:999999999',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
        ], [
            'name.required' => "Product name must be filled",
            'name.max' => "Product name cannot be more than :max characters",
            'category_id.required' => "Category must be selected",
            'category_id.exists' => "Selected category is not found",
            'price.required' => "Price must be filled",
            'price.integer' => "Price must be a number",
            'price.min' => "Price cannot be negative",
            'price.max' => "Price is too large",
            'stock.required' => "Stock must be filled",
            'stock.integer' => "Stock must be a number",
            'stock.min' => "Stock cannot be negative",
            'description.required' => "Description must be filled",
        ]);
        $product->update($validated);
        return to_route('product.index')->withSuccess('A Product Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete($product);
        return to_route('product.index')->withSuccess('A Product Succesfully Deleted');
    }
}
