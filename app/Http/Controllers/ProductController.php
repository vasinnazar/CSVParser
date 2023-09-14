<?php

namespace App\Http\Controllers;

use App\Action\Products\IndexAction;
use App\Repositories\ProductRepository;

class ProductController
{
    // render products action
     public function index(IndexAction $indexAction, ProductRepository $productRepository)
     {
         $products = $indexAction->action($productRepository);
         return view('products', ['products' => $products]);
     }
}
