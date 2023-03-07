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

        return back();
    }

    public function viewProduct()
    {
        return view('products');
    }

    public function editProduct()
    {
        return view('edit');
    }
}
