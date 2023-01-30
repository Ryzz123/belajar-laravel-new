<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class Product
{
    public static function getProducts()
    {
        $response = Http::get('https://api-repository.vercel.app/api/v1/products');
        $data = $response->json();

        return collect($data);
    }

    public static function getProductById($id)
    {
        $product = static::getProducts();

        return $product->firstWhere('id', $id);
    }
}
