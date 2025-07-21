<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view("users.product.index", compact("products"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required|min:4',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);
        try {
            Product::create($validated);
            return redirect()->route('product')->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Failed to add product.');
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required|min:4',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'id' => 'required|exists:products,id',
        ]);

        try {
            $product = Product::findOrFail($request->id);

            $product->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'qty' => $validated['qty'],
                'price' => $validated['price'],
            ]);

            return redirect()->route('product')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to update product: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('product')->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete product: ' . $e->getMessage());
        }
    }
}
