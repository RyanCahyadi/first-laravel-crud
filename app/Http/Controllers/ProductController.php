<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function home()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Product::create($request->all());
        Product::create([
            'product_name'  => $request->productName,
            'price'         => $request->productPrice,
            'stock'         => $request->productStock
        ]);

        return redirect('/products');
    }

    public function viewProduct()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        Product::where('id', $id)->update([
            'product_name'  => $request->productName,
            'price'         => $request->productPrice,
            'stock'         => $request->productStock
        ]);

        return redirect('/products');
    }

}
