<?php

namespace App\Repositories;

use App\Products;

class ProductRepository
{
    public function all()
    {
        return Products::with('user')->get();
    }

    public function create($request)
    {
        $request['price'] = str_replace(',', '.', $request['price']);

        $product['name'] = $request['name'] ?? false;
        $product['description'] = $request['description'] ?? false;
        $product['picture'] = $request['picture'] ?? false;
        $product['price'] = (float) $request['price'] ?? false;
        $product['user_id'] = $request['user_id'] ?? false;

        return Products::create($product);
    }
}
