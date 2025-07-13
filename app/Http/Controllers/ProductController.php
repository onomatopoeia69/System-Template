<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
}
