<?php

namespace App\Repositories;

use App\Products;

class ProductRepository
{
    public function all()
    {
        return Products::with('user')->get();
    }
}