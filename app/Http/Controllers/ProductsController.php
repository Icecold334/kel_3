<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'products' => Products::all(),
            'title' => 'Produk'
        ];
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Produk'
        ];
        return view('products.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $name = $request->name;
        $price = $request->price;
        Products::create(['name' => $name, 'price' => $price]);
        return redirect()->route('products.index')->with('success', "Produk $name berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        return 'oke';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
    public function check(Request $request)
    {
        $form = $request->keys()[0];
        $args = $form == 'name' ? 'required' : 'required|integer';
        $validate = $request->validate([
            $form => $args
        ]);
        return response()->json(['success' => true]);
    }
}
