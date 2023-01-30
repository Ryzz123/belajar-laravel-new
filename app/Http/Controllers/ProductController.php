<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        return view('products',[
            "title" => "Products",
            "datas" => Product::getProducts()
        ]);
    }

    public function show($id) {
        return view('product',[
            "title" => "Products detail",
            "data" => Product::getProductById($id)
        ]);
    }
}
